<div class="flex bg-gray-50 dark:bg-gray-900 h-[calc(100vh-4.05rem)]">
    <!-- Sidebar (fixed width) -->
    <aside class="w-72 flex flex-col border-r border-gray-200 dark:border-gray-700 p-4">
        <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-300 mb-4">
            Your Chat Sessions
        </h2>
        <div class="flex-1 overflow-y-auto space-y-2">
            @forelse (Auth::user()->chats as $chat)
                <button
                    wire:click="selectChat('{{ $chat->id }}')"
                    class="w-full text-left px-4 py-2 rounded-lg border transition duration-200
                    {{ $selectedChat && $selectedChat->id == $chat->id
                        ? 'bg-blue-500 text-white border-blue-500'
                        : 'bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border-gray-300 dark:border-gray-600' }}"
                >
                    {{ $chat->title }}
                </button>
            @empty
                <p class="text-gray-500 dark:text-gray-400">No chat sessions available.</p>
            @endforelse
        </div>
        <div class="mt-4">
            <button
                wire:click="createChat"
                class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-2 rounded-lg transition duration-200"
            >
                New Chat
            </button>
        </div>
    </aside>

    <!-- Chat Window (full available space) -->
    <main class="flex-1 flex flex-col">
        <div class="flex-1 flex flex-col overflow-hidden">
            @if($selectedChat)
                <livewire:chat-window :chat="$selectedChat" :key="$selectedChat->id" />
            @else
                <div class="flex-1 flex items-center justify-center">
                    <p class="text-gray-500 dark:text-gray-400">
                        Select a chat session to start messaging
                    </p>
                </div>
            @endif
        </div>
    </main>
</div>
