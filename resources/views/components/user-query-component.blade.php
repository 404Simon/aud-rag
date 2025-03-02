<div class="p-2 bg-gray-100 dark:bg-gray-800 rounded shadow">
    <div class="font-semibold text-gray-800 dark:text-gray-100">
        User Query
    </div>
    <div class="text-gray-700 dark:text-gray-300">
        {{ $userQuery->message }}
    </div>
    <div class="text-xs text-gray-500 dark:text-gray-400">
        {{ $userQuery->created_at->diffForHumans() }}
    </div>
</div>
