<?php

namespace App\View\Components;

use App\Models\RelevantTopics;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Closure;

class RelevantTopicsComponent extends Component
{
    public RelevantTopics $relevantTopics;

    /**
     * Create a new component instance.
     */
    public function __construct(RelevantTopics $relevantTopics)
    {
        $this->relevantTopics = $relevantTopics;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.relevant-topics-component');
    }
}
