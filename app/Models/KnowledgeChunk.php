<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Pgvector\Laravel\HasNeighbors;
use Pgvector\Laravel\Vector;

class KnowledgeChunk extends Model
{
    use HasUuids;
    use HasNeighbors;

    protected $fillable = ['title', 'description', 'tags', 'embedding', 'topic', 'content'];

    protected $casts = ['tags' => 'array', 'embedding' => Vector::class];
}
