---
title: Kruskal-Algorithmus  
description: Sortierbasierter Greedy-Algorithmus zur Erstellung eines minimalen Spannbaums – inklusive Schritt-für-Schritt Beispiel mit Union-Find.  
tags:
    - Graphen
    - MST
    - Greedy
    - Algorithmus
---

# Kruskal-Algorithmus

Der **Kruskal-Algorithmus** erstellt einen minimalen Spannbaum, indem er Kanten nach Gewicht sortiert und sukzessive hinzufügt, sofern sie keinen Zyklus erzeugen.

**Beispiel:**  
Gegeben sei ein gewichteter Graph mit den Knoten A, B, C, D und den Kanten:  
- (A, B) = 2  
- (A, C) = 1  
- (B, C) = 2  
- (B, D) = 3  
- (C, D) = 4

**Schritt-für-Schritt Ablauf:**  

1. **Sortierung:**  
   - Sortiere die Kanten:  
     1. (A, C)=1  
     2. (A, B)=2  
     3. (B, C)=2  
     4. (B, D)=3  
     5. (C, D)=4

2. **Erste Iteration:**  
   - Wähle (A, C)=1.  
   - Füge hinzu, da noch kein Zyklus entsteht.

3. **Zweite Iteration:**  
   - Nächste Kante (A, B)=2.  
   - Füge hinzu; aktueller Baum: {A, B, C}.

4. **Dritte Iteration:**  
   - Betrachte (B, C)=2.  
   - Diese Kante erzeugt einen Zyklus (A, B, C sind schon verbunden) → verwerfen.

5. **Vierte Iteration:**  
   - Wähle (B, D)=3.  
   - Füge hinzu; Endbaum: {A, B, C, D}.

6. **Abschluss:**  
   - Alle Knoten sind verbunden, Algorithmus terminiert.

