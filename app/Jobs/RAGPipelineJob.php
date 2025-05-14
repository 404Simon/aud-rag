<?php

namespace App\Jobs;

use App\Enums\ChatMessageType;
use App\Events\ChatUpdated;
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

    public function __construct(protected Chat $chat, protected string $userQuery) {}

    public function handle(ChatService $chatService): void
    {
        $relevantTopics = RelevantTopicsService::getRelevantTopics($this->userQuery);
        $relevantTopicsMessage = $this->chat->messages()->create([
            'type' => ChatMessageType::RELEVANT_TOPICS,
        ]);
        $relevantTopicsMessage->relevantTopics()->create($relevantTopics);
        ChatUpdated::dispatch($this->chat);

        $embeddedQuery = EmbeddingService::createEmbedding($this->userQuery);
        $relevantChunks = KnowledgeChunk::query()
            ->whereIn('topic', array_keys(array_filter($relevantTopics)))
            ->nearestNeighbors('embedding', $embeddedQuery, Distance::Cosine)
            ->take(5)
            ->get();

        $vectorSearchMessage = $this->chat->messages()->create([
            'type' => ChatMessageType::VECTOR_SEARCH,
        ]);
        ChatUpdated::dispatch($this->chat);
        $rerankedChunks = collect();

        $relevantChunks->each(function (KnowledgeChunk $chunk) use ($vectorSearchMessage, $rerankedChunks) {
            $isRelevant = RerankingService::isRelevant($this->userQuery, $chunk);
            if ($isRelevant === null) {
                Log::error('isRelevant is null for chunk ID: '.$chunk->id);

                return;
            }

            $vectorSearchMessage->knowledgeChunkSearchResults()->create([
                'knowledge_chunk_id' => $chunk->id,
                'distance' => $chunk->neighbor_distance,
                'isRelevant' => $isRelevant,
            ]);
            ChatUpdated::dispatch($this->chat);

            if ($isRelevant) {
                $rerankedChunks->push($chunk);
            }
        });

        $chatAnswerMessage = $this->chat->messages()->create([
            'type' => ChatMessageType::CHAT_ANSWER,
        ]);
        ChatUpdated::dispatch($this->chat);

        $chatService->generateAnswer($this->userQuery, $rerankedChunks, $chatAnswerMessage);
    }
}
