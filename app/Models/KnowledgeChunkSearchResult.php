<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KnowledgeChunkSearchResult extends Model
{
    protected $fillable = ['chat_message_id', 'knowledge_chunk_id', 'distance'];

    public function knowledgeChunk()
    {
        return $this->belongsTo(KnowledgeChunk::class);
    }
}
