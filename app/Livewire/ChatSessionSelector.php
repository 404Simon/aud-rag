<?php

namespace App\Livewire;

use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatSessionSelector extends Component
{
    public ?Chat $selectedChat;
    public $editingChatId = null;
    public $editingChatTitle = '';

    public function createChat()
    {
        $this->selectedChat = Auth::user()->chats()->create(['title' => 'Chat Session ' . now()->format('H:i:s')]);
    }

    public function selectChat($chatId)
    {
        $this->selectedChat = Auth::user()->chats()->findOrFail($chatId);
    }

    public function saveChat()
    {
        if ($this->editingChatId) {
            $chat = Auth::user()->chats()->findOrFail($this->editingChatId);
            if ($chat) {
                $chat->update(['title' => $this->editingChatTitle]);
            }
        }

        // Close the modal
        $this->cancelEditing();
    }

    public function cancelEditing()
    {
        $this->editingChatId = null;
        $this->editingChatTitle = '';
    }

    public function deleteChat($chatId)
    {
        Auth::user()->chats()->findOrFail($chatId)->delete();
        $this->editingChatId = null;
        $this->selectedChat = null;
    }

    public function startEditing($chatId)
    {
        $chat = Auth::user()->chats()->findOrFail($chatId);
        if ($chat) {
            $this->editingChatId = $chatId;
            $this->editingChatTitle = $chat->title;
        }
    }

    public function render()
    {
        return view('livewire.chat-session-selector');
    }
}
