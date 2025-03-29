@php
    use App\Enums\ChatMessageType;
@endphp

<div class="flex flex-col h-full" x-data>
    <div class="flex-1 overflow-y-auto p-4 space-y-2">
        @forelse ($this->chat->messages as $message)
            @switch($message->type)
                @case(ChatMessageType::USER_QUERY)
                    <x-user-query-component :userQuery="$message->userQuery" />
                @break

                @case(ChatMessageType::RELEVANT_TOPICS)
                    <x-relevant-topics-component :relevantTopics="$message->relevantTopics" />
                @break

                @case(ChatMessageType::VECTOR_SEARCH)
                    <x-vector-search-component :message="$message" />
                @break

                @case(ChatMessageType::CHAT_ANSWER)
                    <x-chat-answer-component :message="$message" />
                @break
            @endswitch
            @empty
                <div class="text-gray-500 dark:text-gray-400">
                    No messages yet. Start the conversation!
                </div>
            @endforelse
            @if ($isGenerating)
                <div class="flex justify-center items-center p-4">
                    <x-spinner />
                </div>
            @endif
        </div>

        <div class="p-4 border-t border-gray-200 dark:border-gray-700">
            <form wire:submit.prevent="sendMessage" class="flex flex-col space-y-2">
                <textarea wire:model="messageText" placeholder="Type your message..." @disabled($isGenerating)
                    @keydown.enter.prevent="if (!event.shiftKey) { $wire.sendMessage(); }"
                    class="w-full border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 resize-none disabled:border-gray-200 disabled:bg-gray-50 disabled:text-gray-500 disabled:shadow-none dark:disabled:border-gray-700 dark:disabled:bg-gray-800/20"
                    rows="3"></textarea>
                <div class="flex gap-2 justify-end">
                    <div>
                        <button type="button" wire:click="openExportModal" wire:loading.attr="disabled"
                            class="self-end bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition duration-200 disabled:opacity-50 disabled:cursor-not-allowed">
                            Export
                        </button>
                    </div>
                    <div>
                        <button type="submit" @disabled($isGenerating)
                            class="self-end bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition duration-200 disabled:border-gray-200 disabled:bg-gray-50 disabled:text-gray-500 disabled:shadow-none dark:disabled:border-gray-700 dark:disabled:bg-gray-800/20 disabled:cursor-not-allowed">
                            <span wire:loading wire:target="sendMessage">Sending...</span>
                            <span wire:loading.remove wire:target="sendMessage">Send</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        @if ($showExportModal)
            <div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 dark:bg-opacity-70"
                wire:keydown.escape.window="closeExportModal" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl p-6 w-full max-w-2xl mx-4 max-h-[80vh] flex flex-col"
                    @click.away="closeExportModal" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                    <div class="flex justify-between items-center pb-3 border-b border-gray-200 dark:border-gray-700">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Export Chat as Markdown</h3>
                        <button wire:click="closeExportModal"
                            class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 overflow-y-auto py-4">
                        <textarea x-ref="markdownOutput" readonly
                            class="w-full h-96 bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 border border-gray-300 dark:border-gray-700 rounded-md p-3 font-mono text-sm resize-none focus:outline-none focus:ring-0">{{ $markdownContent }}</textarea>
                    </div>
                    <div class="flex justify-end items-center pt-3 border-t border-gray-200 dark:border-gray-700 space-x-3">
                        <button type="button"
                            @click="navigator.clipboard.writeText($refs.markdownOutput.value); $el.textContent = 'Copied!'; setTimeout(() => $el.textContent = 'Copy to Clipboard', 2000)"
                            class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg text-sm transition duration-200">
                            Copy to Clipboard
                        </button>
                        <button type="button" wire:click="closeExportModal"
                            class="px-4 py-2 bg-gray-200 hover:bg-gray-300 dark:bg-gray-600 dark:hover:bg-gray-500 text-gray-800 dark:text-gray-100 rounded-lg text-sm transition duration-200">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        @endif
    </div>
