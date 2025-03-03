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

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['title', 'description', 'tags', 'embedding', 'topic', 'content'];

    protected $casts = ['embedding' => Vector::class];
}
