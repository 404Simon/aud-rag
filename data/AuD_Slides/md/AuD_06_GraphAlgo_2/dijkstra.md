---
title: Kürzeste Wege – Dijkstra-Algorithmus im Detail
description: Ausführliche Erklärung von Dijkstras Algorithmus zur Bestimmung kürzester Wege, inklusive eines konkreten Beispiels mit Schritt-für-Schritt-Berechnungen.
tags:
    - Dijkstra
    - Kürzeste Wege
    - Algorithmus
    - Beispiel
---

# Kürzeste Wege – Dijkstra-Algorithmus im Detail

**Grundidee:**  
Dijkstra ermittelt den kürzesten Weg von einem Startknoten zu allen anderen Knoten in einem Graphen mit positiven Kantengewichten.

**Schritt-für-Schritt-Beispiel:**  

Betrachte folgenden Graphen:  
- Knoten: A, B, C, D  
- Kanten und Gewichte:  
  - A–B: 2  
  - A–C: 4  
  - B–C: 1  
  - B–D: 7  
  - C–D: 3

**Ausführung:**

1. **Initialisierung:**  
   - Setze Distanz(A) = 0, alle anderen auf ∞.  
   - Markiere A als besucht.

2. **Iteration 1:**  
   - Von A aus:  
     - B: 0 + 2 = 2  
     - C: 0 + 4 = 4  
   - Wähle den Knoten mit der kleinsten Distanz: B (Distanz 2).

3. **Iteration 2:**  
   - Von B aus:  
     - C: 2 + 1 = 3 (verbessert den bisherigen Wert 4)  
     - D: 2 + 7 = 9  
   - Aktualisiere:  
     - C = 3, D = 9  
   - Wähle den nächsten Knoten: C (Distanz 3).

4. **Iteration 3:**  
   - Von C aus:  
     - D: 3 + 3 = 6 (verbessert den bisherigen Wert 9)  
   - Aktualisiere:  
     - D = 6  
   - Wähle: D (Distanz 6).

5. **Ergebnis:**  
   - Kürzester Weg von A nach D: A → B → C → D mit Gesamtkosten 6.

Jeder Schritt wird dokumentiert und zeigt, wie sich die Distanzen im Laufe der Iterationen verbessern.

