---
title: Graph Coloring Problem
description: Detaillierte Erklärung des Graphfärbungsproblems mit konkretem Beispiel, das Schritt für Schritt zeigt, wie Knoten in einem kleinen Graphen gefärbt werden.
tags:
    - Graphfärbung
    - Chromatische Zahl
    - Beispiel
    - Algorithmus
---

# Graph Coloring Problem – Ausführliche Einführung

**Definition:**  
Beim Graphfärbungsproblem wird jedem Knoten eines ungerichteten Graphen eine Farbe zugewiesen, sodass benachbarte Knoten niemals dieselbe Farbe erhalten.

**Schritt-für-Schritt-Beispiel:**  

Angenommen, wir haben einen Graphen mit 4 Knoten und den Kanten:  
- A – B  
- A – C  
- B – D  
- C – D  

1. **Schritt 1:**  
   - Beginne mit Knoten A und weise die erste Farbe zu, z. B. Rot.
   - *Farbzuweisung:* A = Rot

2. **Schritt 2:**  
   - Betrachte Knoten B, der mit A verbunden ist. A ist Rot, also darf B nicht Rot sein. Weisen B die nächste verfügbare Farbe zu, z. B. Blau.
   - *Farbzuweisung:* B = Blau

3. **Schritt 3:**  
   - Knoten C ist ebenfalls mit A verbunden. Da A Rot hat, kann C Blau oder eine andere Farbe erhalten. Wir wählen Blau, wenn es keine direkte Verbindung zu B gibt – hier ist C aber nicht direkt mit B verbunden.
   - *Farbzuweisung:* C = Blau

4. **Schritt 4:**  
   - Knoten D ist mit B und C verbunden. B und C haben beide Blau, also ist Blau nicht möglich. Es wird die nächste Farbe gewählt: Rot ist möglich, wenn D nicht mit A verbunden wäre, aber in diesem Beispiel ist D nicht mit A verknüpft. Daher kann D Rot bekommen.
   - *Farbzuweisung:* D = Rot

**Ergebnis:**  
- A: Rot  
- B: Blau  
- C: Blau  
- D: Rot  

**Wichtig:**  
Dieses Beispiel zeigt, dass schon kleine Graphen mehrere Überlegungen erfordern. Bei größeren Graphen spielt auch die Reihenfolge der Knotenauswahl eine Rolle.

