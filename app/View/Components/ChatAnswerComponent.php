<?php

namespace App\View\Components;

use App\Models\ChatAnswer;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Closure;

class ChatAnswerComponent extends Component
{
    public ChatAnswer $chatAnswer;

    /**
     * Create a new component instance.
     */
    public function __construct(ChatAnswer $chatAnswer)
    {
        $this->chatAnswer = $chatAnswer;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.chat-answer-component');
    }
}
