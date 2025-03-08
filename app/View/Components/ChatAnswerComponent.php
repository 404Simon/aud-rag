<?php

namespace App\View\Components;

use App\Models\ChatMessage;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Closure;

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
        return view('components.chat-answer-component');
    }
}
