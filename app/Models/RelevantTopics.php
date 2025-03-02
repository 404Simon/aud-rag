<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelevantTopics extends Model
{
    protected $fillable = [
        'elementare_datentypen',
        'algorithmenbewertung_und_laufzeit',
        'graphen_baeume',
        'sortierung',
        'suchen',
        'codierung',
        'kompression',
    ];
}
