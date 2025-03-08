<?php

namespace App\Jobs;

use App\Enums\ChatMessageType;
use App\Models\Chat;
use App\Models\KnowledgeChunk;
use App\Services\ChatService;
use App\Services\EmbeddingService;
use App\Services\RelevantTopicsService;
use App\Services\RerankingService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use Pgvector\Laravel\Distance;

class RAGPipelineJob implements ShouldQueue
{
    use Queueable;

    protected Chat $chat;
    protected string $userQuery;

    /**
     * Create a new job instance.
     */
    public function __construct(Chat $chat, string $userQuery)
    {
        $this->chat = $chat;
        $this->userQuery = $userQuery;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $relevantTopics = RelevantTopicsService::getRelevantTopics($this->userQuery);
        $relevantTopicsMessage = $this->chat->messages()->create([
            'type' => ChatMessageType::RELEVANT_TOPICS,
        ]);
        $relevantTopicsMessage->relevantTopics()->create($relevantTopics);

        $embeddedQuery = EmbeddingService::createEmbedding($this->userQuery);
        $relevantChunks = KnowledgeChunk::query()
            ->whereIn('topic', array_keys(array_filter($relevantTopics)))
            ->nearestNeighbors('embedding', $embeddedQuery, Distance::Cosine)
            ->take(5)
            ->get();

        $vectorSearchMessage = $this->chat->messages()->create([
            'type' => ChatMessageType::VECTOR_SEARCH,
        ]);
        $rerankedChunks = collect();

        $relevantChunks->each(function (KnowledgeChunk $chunk) use ($vectorSearchMessage, $rerankedChunks) {
            $isRelevant = RerankingService::isRelevant($this->userQuery, $chunk);
            if ($isRelevant === null) {
                Log::error('isRelevant is null for chunk ID: ' . $chunk->id);
                return;
            }

            $vectorSearchMessage->knowledgeChunkSearchResults()->create([
                'knowledge_chunk_id' => $chunk->id,
                'distance' => $chunk->neighbor_distance,
                'isRelevant' => $isRelevant,
            ]);

            if ($isRelevant) {
                $rerankedChunks->push($chunk);
            }
        });

        $chatAnswer = ChatService::generateAnswer($this->userQuery, $rerankedChunks);

        $chatAnswerMessage = $this->chat->messages()->create([
            'type' => ChatMessageType::CHAT_ANSWER,
        ]);
        $chatAnswerMessage->chatAnswer()->create([
            'message' => $chatAnswer->text,
            'llm' => $chatAnswer->responseMeta->model,
        ]);
    }
}
