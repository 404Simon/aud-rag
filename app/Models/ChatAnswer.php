<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatAnswer extends Model
{
    protected $fillable = ['message', 'llm'];
}
