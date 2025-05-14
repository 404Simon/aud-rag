<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GraphImageToolCall extends Model
{
    protected $fillable = [
        'isDirected',
        'edges',
        'isPlanar',
        'image',
    ];

    protected $casts = [
        'edges' => 'array',
    ];
}
