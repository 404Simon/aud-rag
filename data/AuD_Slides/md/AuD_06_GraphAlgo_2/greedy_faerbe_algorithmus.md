---
title: Greedy-Färbe-Algorithmus – Schritt für Schritt
description: Ausführliche Darstellung des Greedy-Färbe-Algorithmus mit einem detaillierten Beispiel, das jeden Schritt und die Auswirkungen auf die Farbzuweisungen zeigt.
tags:
    - Greedy
    - Graphfärbung
    - Algorithmus
    - Beispiel
---

# Greedy-Färbe-Algorithmus – Schritt für Schritt

**Prinzip:**  
Der Algorithmus durchläuft alle Knoten in einer festen Reihenfolge und weist jedem Knoten die kleinstmögliche Farbe zu, die bei seinen Nachbarn noch nicht verwendet wurde. Er trifft lokale Entscheidungen, ohne Korrekturen rückgängig zu machen.

**Detailliertes Beispiel:**  

Betrachte einen Graphen mit 5 Knoten (A, B, C, D, E) und Kanten:  
- A–B, A–C, B–C, B–D, C–D, D–E

**Schrittweise Ausführung:**

1. **Knoten A:**  
   - Keine Vorgänger, weise Farbe 1 zu.  
   - *Farbzuweisung:* A = 1

2. **Knoten B:**  
   - B ist mit A verbunden (A = 1), daher kann B nicht 1 sein.  
   - Wähle die nächstkleinere Farbe: 2.  
   - *Farbzuweisung:* B = 2

3. **Knoten C:**  
   - C ist mit A (Farbe 1) und B (Farbe 2) verbunden.  
   - Die kleinstmögliche Farbe, die noch frei ist, ist 3.  
   - *Farbzuweisung:* C = 3

4. **Knoten D:**  
   - D ist mit B (Farbe 2) und C (Farbe 3) verbunden.  
   - Farbe 1 ist noch frei, sofern D nicht mit A verbunden ist (im Beispiel ist D nicht direkt mit A verknüpft).  
   - *Farbzuweisung:* D = 1

5. **Knoten E:**  
   - E ist nur mit D verbunden (D = 1).  
   - Somit kann E die Farbe 1 nicht bekommen; wähle die kleinste alternative Farbe: 2.  
   - *Farbzuweisung:* E = 2

**Ergebnis:**  
- A: 1, B: 2, C: 3, D: 1, E: 2

**Hinweis:**  
Die Reihenfolge der Knotenauswahl kann das Ergebnis beeinflussen. Ein alternativer Durchlauf könnte andere Farbkombinationen liefern, was zeigt, dass der Greedy-Algorithmus nicht immer zur minimalen Farbanzahl führt, aber eine schnelle und einfache Lösung bietet.

