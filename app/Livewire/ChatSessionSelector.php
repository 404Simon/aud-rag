<?php

namespace App\Livewire;

use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatSessionSelector extends Component
{
    public Chat $selectedChat;

    public function createChat()
    {
        $this->selectedChat = Auth::user()->chats()->create(['title' => 'Chat Session ' . now()->format('H:i:s')]);
    }

    public function selectChat($chatId)
    {
        $this->selectedChat = Auth::user()->chats()->findOrFail($chatId);
    }

    public function render()
    {
        return view('livewire.chat-session-selector');
    }
}
