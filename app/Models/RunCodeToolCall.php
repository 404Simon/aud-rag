<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RunCodeToolCall extends Model
{
    protected $fillable = [
        'code',
        'stdout',
        'stderr',
        'files',
        'images',
    ];

    protected $casts = [
        'files' => 'array',
        'images' => 'array',
    ];
}
