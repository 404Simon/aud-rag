@php
    use App\Enums\ChatMessageType;
@endphp

<div wire:poll.1000ms class="flex flex-col h-full">
    <!-- Messages Area -->
    <div class="flex-1 overflow-y-auto p-4 space-y-2">
        @forelse ($this->chat->messages as $message)
            @if ($message->type === ChatMessageType::USER_QUERY)
                <x-user-query-component :userQuery="$message->userQuery" />
            @endif
            @if ($message->type === ChatMessageType::RELEVANT_TOPICS)
                <x-relevant-topics-component :relevantTopics="$message->relevantTopics" />
            @endif
            @if ($message->type === ChatMessageType::VECTOR_SEARCH)
                <x-vector-search-component :message="$message" />
            @endif
        @empty
            <div class="text-gray-500 dark:text-gray-400">
                No messages yet. Start the conversation!
            </div>
        @endforelse
    </div>
    <!-- Input Area -->
    <div class="p-4 border-t border-gray-200 dark:border-gray-700">
        <form wire:submit.prevent="sendMessage" class="flex">
            <input type="text" wire:model="messageText" placeholder="Type your message..." @disabled($isGenerating)
                class="flex-1 border border-gray-300 dark:border-gray-600 rounded-l px-4 py-2 focus:outline-none bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100 disabled:border-gray-200 disabled:bg-gray-50 disabled:text-gray-500 disabled:shadow-none dark:disabled:border-gray-700 dark:disabled:bg-gray-800/20" />
            <button type="submit" @disabled($isGenerating)
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-r transition duration-200 disabled:border-gray-200 disabled:bg-gray-50 disabled:text-gray-500 disabled:shadow-none dark:disabled:border-gray-700 dark:disabled:bg-gray-800/20">
                Send
            </button>
        </form>
    </div>
</div>
