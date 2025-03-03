<?php

namespace App\Enums;

enum Topic: string
{
    case ELEMENTARE_DATENTYPEN = 'elementare_datentypen';
    case ALGORITHMENBEWERTUNG_LAUFZEIT = 'algorithmenbewertung_und_laufzeit';
    case GRAPHEN_BAEUME = 'graphen_baeume';
    case SORTIERUNG = 'sortierung';
    case SUCHEN = 'suchen';
    case CODIERUNG = 'codierung';
    case KOMPRESSION = 'kompression';
}
