<?php

namespace App\Jobs;

use App\Enums\ChatMessageType;
use App\Models\Chat;
use App\Models\KnowledgeChunk;
use App\Models\KnowledgeChunkSearchResult;
use App\Services\EmbeddingService;
use App\Services\RelevantTopicsService;
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
    public function handle(RelevantTopicsService $relevantTopicsService): void
    {
        $relevantTopics = $relevantTopicsService->getRelevantTopics($this->userQuery);
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
        $distances = $relevantChunks->pluck('neighbor_distance');

        $vectorSearchMessage = $this->chat->messages()->create([
            'type' => ChatMessageType::VECTOR_SEARCH,
        ]);

        for ($i = 0; $i < count($relevantChunks); $i++) {
            $vectorSearchMessage
                ->knowledgeChunkSearchResults()
                ->create(['knowledge_chunk_id' => $relevantChunks[$i]->id, 'distance' => $distances[$i]]);
        }
    }
}
