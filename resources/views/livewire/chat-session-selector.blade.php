<div class="flex bg-gray-50 dark:bg-gray-900 h-[calc(100vh-4.05rem)]">
    <!-- Sidebar (fixed width) -->
    <aside class="w-72 flex flex-col border-r border-gray-200 dark:border-gray-700 p-4">
        <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-300 mb-4">
            Your Chat Sessions
        </h2>
        <div class="flex-1 overflow-y-auto space-y-2">
            @forelse (Auth::user()->chats()->orderBy('created_at', 'desc')->get() as $chat)
                <div>
                    <!-- Chat List Item -->
                    <div class="flex items-center justify-between w-full px-4 py-2 rounded-lg border transition duration-200
                        {{ $selectedChat && $selectedChat->id == $chat->id
                            ? 'bg-blue-500 text-white border-blue-500'
                            : 'bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border-gray-300 dark:border-gray-600' }}"
                    >
                        <button wire:click="selectChat('{{ $chat->id }}')" class="flex-1 text-left">
                            {{ $chat->title }}
                        </button>

                        <!-- Edit & Delete Buttons -->
                        <div class="flex space-x-2">
                            <button wire:click="startEditing('{{ $chat->id }}')" class="text-blue-500 hover:text-blue-700">
                                ✏️
                            </button>
                            <button wire:click="deleteChat('{{ $chat->id }}')" class="text-red-500 hover:text-red-700">
                                🗑️
                            </button>
                        </div>
                    </div>
                    <!-- Edit Chat Modal -->
                    @if ($editingChatId === $chat->id)
                        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
                            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-1/3">
                                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Edit Chat Name</h2>

                                <input
                                    type="text"
                                    wire:model.defer="editingChatTitle"
                                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                />

                                <div class="flex justify-end mt-4 space-x-2">
                                    <button wire:click="cancelEditing" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded-lg">
                                        Cancel
                                    </button>
                                    <button wire:click="saveChat" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
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
