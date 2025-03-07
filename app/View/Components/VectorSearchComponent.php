<?php

namespace App\View\Components;

use App\Models\ChatMessage;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;
use Closure;

class VectorSearchComponent extends Component
{
    public ChatMessage $message;

    /**
     * @var Collection<int, KnowledgeChunkSearchResult>
     */
    public Collection $searchResults;

    public function __construct(ChatMessage $message)
    {
        $this->message = $message;
        $this->searchResults = $message
            ->knowledgeChunkSearchResults()
            ->orderBy('isRelevant', 'desc')
            ->orderBy('distance', 'asc')
            ->with('knowledgeChunk')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.vector-search-component');
    }
}
