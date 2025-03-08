<?php

namespace App\Livewire;

use App\Enums\ChatMessageType;
use App\Jobs\RAGPipelineJob;
use App\Models\Chat;
use Livewire\Component;

class ChatWindow extends Component
{
    public Chat $chat;
    public string $messageText = '';

    protected $rules = [
        'messageText' => 'required|string',
    ];

    public function sendMessage()
    {
        $this->validate();

        if ($this->isGenerating()) {
            return;
        }

        $message = $this->chat->messages()->create([
            'chat_id' => $this->chat->id,
            'type' => ChatMessageType::USER_QUERY,
        ]);

        $message->userQuery()->create(['message' => $this->messageText]);

        RAGPipelineJob::dispatch($this->chat, $this->messageText);
        $this->messageText = '';
    }

    public function isGenerating()
    {
        if ($this->chat->messages->isNotEmpty()) {
            return $this->chat->messages->last()->type !== ChatMessageType::CHAT_ANSWER;
        }
        return false;
    }

    public function render()
    {
        return view('livewire.chat-window', ['isGenerating' => $this->isGenerating()]);
    }
}
