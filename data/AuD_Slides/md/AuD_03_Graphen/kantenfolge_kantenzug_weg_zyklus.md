---
title: Kantenfolge, Kantenzug, Weg und Zyklus
description: Differenzierung der Begriffe Kantenfolge, Kantenzug, Weg und Zyklus in Graphen – essenziell für die Pfadanalyse.
tags:
    - Graph
    - Kantenfolge
    - Weg
    - Zyklus
---

# Kantenfolge, Kantenzug, Weg und Zyklus

**Kantenfolge:**  
Eine Sequenz \( k = (v_0, v_1, \dots, v_n) \), sodass für alle \( i \) gilt: \((v_i, v_{i+1}) \in E\). Knoten und Kanten können wiederholt auftreten.

**Kantenzug:**  
Eine Kantenfolge, in der **keine Kante** mehrfach vorkommt.

**Weg (Pfad):**  
Ein Kantenzug, in dem **keine Knoten** mehrfach auftreten.

**Zyklus:**  
Ein **geschlossener Weg**, bei dem der erste und letzte Knoten identisch sind, während alle inneren Knoten genau einmal vorkommen.

**Beispiel:**
```
Kantenfolge: (1,2,3,4,5,2,3)
Kantenzug:   (1,2,5,4,2,3)
Weg:         (1,2,5,4,3)
Zyklus:      (2,3,4,5,2)

