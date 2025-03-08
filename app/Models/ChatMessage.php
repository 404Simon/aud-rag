<?php

namespace App\Models;

use App\Enums\ChatMessageType;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    protected $fillable = ['chat_id', 'type'];

    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }

    public function userQuery()
    {
        return $this->hasOne(UserQuery::class);
    }

    public function relevantTopics()
    {
        return $this->hasOne(RelevantTopics::class);
    }

    public function knowledgeChunkSearchResults()
    {
        return $this->hasMany(KnowledgeChunkSearchResult::class);
    }

    public function chatAnswer()
    {
        return $this->hasOne(ChatAnswer::class);
    }

    public function graphImageToolCalls()
    {
        return $this->hasMany(GraphImageToolCall::class);
    }

    protected $casts = [
        'type' => ChatMessageType::class,
    ];
}
