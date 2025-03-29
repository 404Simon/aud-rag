<div x-data="{ open: false }" class="relative flex flex-col h-full">
  <!-- Card -->
  <div class="relative flex flex-col flex-1 p-4 border border-gray-200 dark:border-gray-700 rounded-lg shadow cursor-default transition transform hover:shadow-lg hover:-translate-y-1 duration-300 min-h-[250px]
              {{ $result->isRelevant ? 'bg-white dark:bg-gray-800' : 'bg-gray-200 dark:bg-gray-700' }}">
    <h2 @click="open = true"
        class="text-xl font-semibold cursor-pointer transition-colors duration-300 pr-20
               {{ $result->isRelevant ? 'text-gray-900 dark:text-gray-100 hover:text-blue-600' : 'text-gray-500 dark:text-gray-300 hover:text-blue-400' }}">
      {{ $result->knowledgeChunk->title }}
    </h2>
    <span class="absolute top-4 right-4 text-sm font-medium px-2 py-1 rounded
                 {{ $result->isRelevant ? 'bg-green-100 text-green-700' : 'bg-gray-300 text-gray-600' }}">
      {{ $result->isRelevant ? 'Relevant' : 'Not Relevant' }}
    </span>
    <p class="mt-2 flex-grow
              {{ $result->isRelevant ? 'text-gray-700 dark:text-gray-300' : 'text-gray-600 dark:text-gray-400' }}">
      {{ $result->knowledgeChunk->description }}
    </p>
    <div class="mt-4 flex justify-between items-center">
      <div class="flex flex-wrap">
        @foreach($result->knowledgeChunk->tags as $tag)
          <span class="inline-block bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300 px-2 py-1 rounded text-xs m-1">
            {{ $tag }}
          </span>
        @endforeach
      </div>
      <div class="text-sm
                  {{ $result->isRelevant ? 'text-gray-500 dark:text-gray-400' : 'text-gray-600 dark:text-gray-300' }}">
        Distance: {{ number_format($result->distance, 2) }}
      </div>
    </div>
  </div>

  <!-- Modal -->
    <div x-show="open" class="fixed inset-0 flex items-center justify-center z-50" style="display: none;">
        <div class="fixed inset-0 bg-black opacity-50" @click="open = false"></div>
        <div class="bg-white dark:bg-gray-800 rounded shadow-lg p-6 max-w-3xl w-full relative mx-4">
            <button @click="open = false" class="absolute top-2 right-2 text-gray-600 dark:text-gray-300 text-2xl">&times;</button>
            <div class="markdown-content overflow-y-auto" style="max-height: 70vh;">
                {!! Str::markdown($result->knowledgeChunk->content) !!}
            </div>
        </div>
    </div>
</div>
