<div class="p-2 bg-gray-100 dark:bg-gray-800 rounded shadow">
    <div class="font-semibold text-gray-800 dark:text-gray-100">
        Chat Answer
    </div>
    <div class="text-gray-700 dark:text-gray-300">
        {!! Str::markdown($chatAnswer->message) !!}
    </div>
    <div class="my-2">
        <span class="text-sm font-medium px-2 py-1 rounded bg-green-100 text-green-700">
          {{ $chatAnswer->llm }}
        </span>
    </div>
    <div class="text-xs text-gray-500 dark:text-gray-400">
        {{ $chatAnswer->created_at->diffForHumans() }}
    </div>
</div>
