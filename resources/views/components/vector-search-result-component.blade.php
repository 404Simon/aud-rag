<div x-data="{ open: false }" class="relative flex flex-col h-full">
  <!-- Clickable Card -->
  <div @click="open = true"
       class="flex flex-col flex-1 p-4 border border-gray-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 shadow cursor-pointer transition duration-300 min-h-[250px]">
    <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
      {{ $result->knowledgeChunk->title }}
    </h2>
    <p class="mt-2 text-gray-700 dark:text-gray-300 flex-grow">
      {{ $result->knowledgeChunk->description }}
    </p>
    <div class="mt-auto">
      @foreach($result->knowledgeChunk->tags as $tag)
        <span class="inline-block bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300 px-2 py-1 rounded text-xs m-1">
          {{ $tag }}
        </span>
      @endforeach
    </div>
  </div>

  <!-- Modal -->
  <div x-show="open" class="fixed inset-0 flex items-center justify-center z-50" style="display: none;">
    <div class="fixed inset-0 bg-black opacity-50" @click="open = false"></div>
    <div class="bg-white dark:bg-gray-800 rounded shadow-lg p-6 max-w-3xl w-full relative mx-4">
      <button @click="open = false" class="absolute top-2 right-2 text-gray-600 dark:text-gray-300 text-2xl">&times;</button>
      <div class="markdown-content">
        {!! Str::markdown($result->knowledgeChunk->content) !!}
      </div>
    </div>
  </div>
</div>
