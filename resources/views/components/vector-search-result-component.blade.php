<div x-data="{ open: false }" class="relative group">
  <!-- Main Card -->
  <div class="flex flex-col p-4 border border-gray-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-800 shadow hover:shadow-xl transition duration-300">
    <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
      {{ $result->knowledgeChunk->title }}
    </h2>
    <p class="mt-2 text-gray-700 dark:text-gray-300">
      {{ $result->knowledgeChunk->description }}
    </p>
    <div class="mt-2">
      @foreach($result->knowledgeChunk->tags as $tag)
        <span class="inline-block bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300 px-2 py-1 rounded text-xs m-1">
          {{ $tag }}
        </span>
      @endforeach
    </div>
  </div>

  <!-- Hover Overlay -->
  <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-60 transition duration-300 opacity-0 group-hover:opacity-100 rounded-lg">
    <button @click="open = true" class="px-4 py-2 bg-indigo-600 text-white dark:bg-indigo-700 rounded hover:bg-indigo-500">
      Fullscreen
    </button>
  </div>

  <!-- Modal -->
  <div x-show="open" class="fixed inset-0 flex items-center justify-center z-50" style="display: none;">
    <div class="fixed inset-0 bg-black opacity-50" @click="open = false"></div>
    <div class="bg-white dark:bg-gray-800 rounded shadow-lg p-6 max-w-3xl w-full relative mx-4">
      <button @click="open = false" class="absolute top-2 right-2 text-gray-600 dark:text-gray-300 text-2xl">&times;</button>
      <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">
        {{ $result->knowledgeChunk->title }}
      </h3>
      <p class="text-gray-700 dark:text-gray-300">
        {{ $result->knowledgeChunk->content }}
      </p>
    </div>
  </div>
</div>
