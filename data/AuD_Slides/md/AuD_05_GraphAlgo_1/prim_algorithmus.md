---
title: Prim-Algorithmus  
description: Greedy-Algorithmus zur sukzessiven Erzeugung eines minimalen Spannbaums – Schritt-für-Schritt Beispiel inklusive offener Kanten.  
tags:
    - Graphen
    - MST
    - Greedy
    - Algorithmus
---

# Prim-Algorithmus

Der **Prim-Algorithmus** konstruiert einen minimalen Spannbaum, indem er schrittweise den nächsten Knoten anhand der minimalen Kantengewichte auswählt.

**Beispiel:**  
Gegeben sei ein gewichteter Graph mit den Knoten A, B, C, D und den Kanten:  
- (A, B) = 5  
- (A, C) = 3  
- (A, D) = 7  
- (B, C) = 4  
- (C, D) = 2

**Schritt-für-Schritt Ablauf:**  

1. **Start:**  
   - Wähle Startknoten A.  
   - Offene Kanten von A: {(A, B)=5, (A, C)=3, (A, D)=7}.

2. **Erste Iteration:**  
   - Wähle die Kante mit minimalem Gewicht: (A, C)=3.  
   - Füge Knoten C zum Baum hinzu.  
   - Neuer Baum: {A, C}; verwendete Kante: (A, C).

3. **Zweite Iteration:**  
   - Offene Kanten:  
     - Von A: (A, B)=5, (A, D)=7  
     - Von C: (C, D)=2, (C, B)=4 (sofern vorhanden)  
   - Minimal: (C, D)=2.  
   - Füge D hinzu.  
   - Neuer Baum: {A, C, D}; verwendete Kanten: (A, C), (C, D).

4. **Dritte Iteration:**  
   - Offene Kanten:  
     - Von A: (A, B)=5  
     - Von C: (C, B)=4  
     - Von D: – (falls weitere vorhanden)  
   - Minimal: (C, B)=4.  
   - Füge B hinzu.  
   - Endergebnis: Minimaler Spannbaum mit Knoten {A, B, C, D} und Kanten {(A, C), (C, D), (C, B)}.

