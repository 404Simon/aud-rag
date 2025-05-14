<?php

namespace App\View\Components;

use App\Models\KnowledgeChunkSearchResult;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VectorSearchResultComponent extends Component
{
    public KnowledgeChunkSearchResult $result;

    /**
     * Create a new component instance.
     */
    public function __construct(KnowledgeChunkSearchResult $result)
    {
        $this->result = $result;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.vector-search-result-component');
    }
}
