<?php

namespace App\Jobs;

use App\Enums\ChatMessageType;
use App\Models\Chat;
use App\Services\RelevantTopicsService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

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
        $message = $this->chat->messages()->create([
            'type' => ChatMessageType::RELEVANT_TOPICS,
        ]);
        $message->relevantTopics()->create($relevantTopics);
    }
}
