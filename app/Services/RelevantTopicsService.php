<?php

namespace App\Services;

use EchoLabs\Prism\Enums\Provider;
use EchoLabs\Prism\Prism;
use EchoLabs\Prism\Schema\BooleanSchema;
use EchoLabs\Prism\Schema\ObjectSchema;
use Exception;
use Illuminate\Support\Facades\Log;

class RelevantTopicsService
{
    public static function getRelevantTopics(string $input)
    {
        $schema = new ObjectSchema(
            name: 'relevant_topics',
            description: 'Determins, how relevant these topics are to answer the given question.',
            properties: [
                new BooleanSchema('elementare_datentypen', 'Dieses Teilgebiet der Informatik beschäftigt sich mit **elementaren Datenstrukturen**, die in Programmiersprachen verwendet werden. Es werden **verschiedene Datentypen** wie Ganzzahlen, Fließkommazahlen, boolesche Werte, Zeichen und Zeichenketten vorgestellt. Darüber hinaus werden **Datenstrukturen** wie Aufzählungen, Datensätze, Felder, Listen und dynamische Datenstrukturen, einschließlich verketteter Listen, erläutert. Das Dokument **erklärt auch das Konzept des abstrakten Datentyps (ADT)** und gibt Beispiele für Speicherstrukturen wie Stapel, Warteschlangen und Prioritätswarteschlangen.', false),
                new BooleanSchema('algorithmenbewertung_und_laufzeit', 'Das Teilgebiet befasst sich mit der **Komplexitätstheorie**, die sich mit der Bewertung der Effizienz von Algorithmen beschäftigt. Es werden **verschiedene Methoden zur Effizienzberechnung** vorgestellt, von der Zeitmessung bis zur asymptotischen Abschätzung. Das Dokument erklärt die **Bedeutung der Komplexitätsklassen** wie linear, polynomiell und exponentiell, und diskutiert die **Problemklassen P, NP, NP-schwer und NP-vollständig**. Anhand von **Beispielen wie Fibonacci-Zahlen, Feldern, Matrizen und dem Springerproblem** wird die Anwendung der Komplexitätstheorie veranschaulicht.', false),
                new BooleanSchema('graphen_baeume', 'Graphen und Bäumen sind fundamentale Datenstrukturen in der Informatik**. Sie behandeln **grundlegende Definitionen, Eigenschaften und verschiedene Arten dieser Strukturen**, wie z.B. gerichtete und ungerichtete Graphen, Bäume, Wurzelbäume und Binärbäume. Darüber hinaus werden **Algorithmen zur Verarbeitung von Graphen und Bäumen** vorgestellt, darunter Suchalgorithmen (Breitensuche, Tiefensuche), Algorithmen zur Berechnung von minimalen Spannbäumen (Prim, Kruskal) und Algorithmen zur Bestimmung kürzester Wege (Dijkstra, Floyd).', false),
                new BooleanSchema('sortierung', 'Diese Lektion befasst sich mit **Sortieralgorithmen**, die in verschiedene Kategorien eingeteilt werden, darunter einfache, schnelle, spezielle und externe Verfahren. Sie beschreiben die **Funktionsweise verschiedener Algorithmen wie Bubble Sort, Selection Sort, Insertion Sort, Shell Sort, Heap Sort, Quick Sort, Merge Sort und Counting Sort**, analysieren ihre Laufzeitkomplexität und vergleichen ihre Effizienz in unterschiedlichen Szenarien.', false),
                new BooleanSchema('suchen', 'Suchalgorithmen in Feldern und Bäumen** mit Fokus auf binäre Suchbäume und AVL-Bäume. Sie lernen verschiedene Suchmethoden, darunter lineare und binäre Suche sowie Interpolationssuche, und beschreiben **die Funktionsweise, Komplexität und Vor- und Nachteile** der jeweiligen Verfahren. Weiterhin werden **B-Bäume als plattenbasierte Suchstruktur** vorgestellt und die Unterschiede zu B*-Bäumen, die eine effizientere Speicherung und Organisation großer Datenmengen ermöglichen, erläutert. Im zweiten Teil wird außerdem **Hashing als Verfahren zur schnellen Suche** vorgestellt.', false),
                new BooleanSchema('codierung', 'Die Codierung bietet eine umfassende Einführung in das Thema Codierung in der Informatik und behandelt verschiedene Aspekte wie **grundlegende Definitionen, Code-Erzeugung, Code-Sicherung, lineare Codes und nicht-binäre Codes**. Es werden **etablierte Codierungsverfahren** wie BCD, ASCII und Unicode vorgestellt sowie **Methoden zur Fehlererkennung und -korrektur** wie Paritätscodes, Kreuzparität und Hamming-Distanz erläutert. Das Dokument beinhaltet zudem **zahlreiche Beispiele und Übungsaufgaben** zur Vertiefung des Verständnisses.', false),
                new BooleanSchema('kompression', 'Die Lektion Datenkompression stellt verschiedene Kompressionsverfahren vor, darunter die arithmetische Codierung, Lauflängencodierung, Differenzcodierung und den LZW-Algorithmus. Es werden **sowohl verlustfreie als auch verlustbehaftete Kompressionsmethoden** erklärt und anhand von Beispielen illustriert.', false),
            ],
        );

        try {
            $response = Prism::structured()
                ->using(Provider::OpenAI, 'gpt-4o-mini')
                ->withSchema($schema)
                ->withPrompt('Du bist Informatikexperte. Analysiere die gegebene Frage und bestimme alle relevanten Teilgebiete der Informatik.\nFrage: '.$input)
                ->generate();

            return $response->structured;
        } catch (Exception $e) {
            Log::error('Failed to generate embedding for input: '.$input.'. Error: '.$e->getMessage());

            return null;
        }
    }
}
