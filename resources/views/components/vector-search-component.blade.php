<div class="p-2 bg-gray-100 dark:bg-gray-800 rounded shadow">
    <div class="font-semibold text-gray-800 dark:text-gray-100">
        Vector Search Results
    </div>
    <div class="my-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
      @if($searchResults->isEmpty() && $message->chat->messages->last()->type === App\Enums\ChatMessageType::VECTOR_SEARCH)
          <x-spinner />
      @elseif($searchResults->isEmpty())
          <div class="text-gray-500 dark:text-gray-400">
              Keine relevanten Chunks gefunden...
          </div>
      @endif
      @foreach($searchResults as $result)
        <x-vector-search-result-component :result="$result" />
      @endforeach
    </div>
    <div class="text-xs text-gray-500 dark:text-gray-400">
        {{ $message->created_at->diffForHumans() }}
    </div>
</div>
