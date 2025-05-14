<?php

namespace App\View\Components;

use App\Models\ChatMessage;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ChatAnswerComponent extends Component
{
    public ChatMessage $message;

    /**
     * Create a new component instance.
     */
    public function __construct(ChatMessage $message)
    {
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $toolCalls = $this->message->graphImageToolCalls;
        $codeCalls = $this->message->runCodeToolCalls;
        $calls = $toolCalls->merge($codeCalls)->sortBy('created_at');

        return view('components.chat-answer-component', compact('calls'));
    }
}
