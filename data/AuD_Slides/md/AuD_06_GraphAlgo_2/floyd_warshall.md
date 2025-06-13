---
title: Floyd-Warshall Algorithmus
description: Detaillierte Darstellung des Floyd-Warshall Algorithmus mit Beispiel, das die Berechnung der Distanzmatrix für einen kleinen Graphen Schritt für Schritt zeigt.
tags:
    - Floyd-Warshall
    - Algorithmus
    - Dynamische Programmierung
    - Beispiel
---

# Floyd-Warshall Algorithmus – Schrittweise Erklärung

**Grundidee:**  
Der Floyd-Warshall Algorithmus berechnet die kürzesten Pfade zwischen allen Knotenpaaren durch wiederholte Verbesserung der Distanzmatrix.

**Beispielgraph:**  
- Knoten: A, B, C  
- Direkte Distanzen:  
  - A–B: 3  
  - B–C: 2  
  - A–C: 10  
- Initiale Matrix:  
  ```
     A    B    C
  A  0    3   10
  B  ∞    0    2
  C  ∞   ∞     0
  ```

**Schrittweise Durchführung:**  

1. **Iteration k = A:**  
   - Prüfe, ob Wege über A (z. B. B → A → C) kürzer sind.  
   - Da A nicht erreichbar ist (∞ in manchen Feldern), bleibt die Matrix unverändert.

2. **Iteration k = B:**  
   - Prüfe, ob z. B. A → B → C kürzer ist als der direkte Weg A–C.  
   - Berechnung: 0 (A→A) + 3 (A→B) + 2 (B→C) = 5.  
   - Da 5 < 10, aktualisiere A–C zu 5.

3. **Iteration k = C:**  
   - Prüfe weitere Kombinationen, falls nötig.  
   - In diesem Fall sind keine weiteren Verbesserungen möglich.

**Endergebnis:**  
- Finalisierte Distanzmatrix:
  ```
     A    B    C
  A  0    3    5
  B  ∞    0    2
  C  ∞   ∞     0
  ```

Dieses Beispiel zeigt, wie durch wiederholte Betrachtung aller Knoten als Zwischenstation die Matrix schrittweise optimiert wird.

