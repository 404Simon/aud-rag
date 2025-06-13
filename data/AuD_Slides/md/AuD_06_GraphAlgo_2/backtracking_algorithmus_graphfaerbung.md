---
title: Backtracking-Algorithmus für Graphfärbung
description: Detaillierte Schritt-für-Schritt-Erklärung des Backtracking-Algorithmus inklusive Pseudocode und einem Beispiel mit 3 Knoten.
tags:
    - Backtracking
    - Graphfärbung
    - Algorithmus
    - Schritt-für-Schritt
---

# Backtracking-Algorithmus für Graphfärbung – Ausführliches Beispiel

**Prinzip:**  
Der Algorithmus versucht alle möglichen Farbkombinationen, um eine zulässige Färbung zu finden. Dabei wird für jeden Knoten rekursiv eine Farbe zugewiesen. Scheitert ein Zweig (keine gültige Farbe), wird zurückgegangen („backtracking“).

**Pseudocode mit detaillierten Kommentaren:**
```
function graphColour(k):
    // k ist der aktuelle Knotenindex, der gefärbt werden soll
    for c = 1 to m:  // m ist die Anzahl der verfügbaren Farben
        if isSafe(k, c):
            x[k] = c  // Weise Knoten k die Farbe c zu
            if (k + 1 < n):
                graphColour(k + 1)  // Rekursiver Aufruf für den nächsten Knoten
            else:
                print(x)  // Alle Knoten gefärbt, gültige Lösung gefunden
            // Backtracking: Entferne die Farbzuteilung, um alternative Lösungen zu testen
            x[k] = 0
```

**isSafe-Methode – Schritt für Schritt erklärt:**
```
function isSafe(k, c):
    for each Knoten i in Nachbarn von k:
        if x[i] == c:
            return false  // Farbe c ist bereits bei einem benachbarten Knoten vergeben
    return true  // Farbe c kann an Knoten k vergeben werden
```

**Ausführliches Beispiel:**  
Angenommen, ein Graph hat 3 Knoten (A, B, C) und 3 Farben (1, 2, 3).  
- Beginne mit Knoten A (Index 0):
  - Teste Farbe 1: isSafe(0,1) gibt true, also x[0] = 1.
- Gehe zu Knoten B (Index 1):
  - Teste Farbe 1: wenn A ein Nachbar ist, isSafe(1,1) gibt false.
  - Teste Farbe 2: isSafe(1,2) gibt true, also x[1] = 2.
- Gehe zu Knoten C (Index 2):
  - Teste Farbe 1: falls C mit A verbunden ist, Farbe 1 ist nicht erlaubt.
  - Teste Farbe 2: falls C mit B verbunden ist, Farbe 2 ist nicht erlaubt.
  - Teste Farbe 3: isSafe(2,3) gibt true, also x[2] = 3.
- Ergebnis: x = [1, 2, 3] ist eine gültige Färbung.

Durch Rückverfolgung (Backtracking) können auch alternative Lösungen gefunden oder ausgeschlossen werden.

