---
title: Warshall-Algorithmus  
description: Iterativer Algorithmus zur Berechnung des transitiven Abschlusses eines gerichteten Graphen – inklusive detailliertem Schritt-für-Schritt Beispiel.  
tags:
    - Graphen
    - Algorithmus
    - Transitivität
    - Warshall
---

# Warshall-Algorithmus

Der **Warshall-Algorithmus** transformiert die Adjazenzmatrix in n Schritten zur Erreichbarkeitsmatrix (transitiver Abschluss).

**Beispiel:**  
Betrachten wir denselben Graphen mit Knoten A, B, C und der Matrix:

```
A = [ [0, 1, 0],
      [0, 0, 1],
      [0, 0, 0] ]
```

**Schritte:**  

1. **Initialisierung:**  
   - Setze die Ausgangsmatrix als A⁰ = A.

2. **Iteration k = 1 (Betrachte Knoten A als Zwischenknoten):**  
   - Prüfe für alle i, j, ob A[i, A] und A[A, j] > 0 sind.  
   - Für i=A, j=C:  
     - A[A, A] = 0, daher passiert nichts.

3. **Iteration k = 2 (Betrachte Knoten B):**  
   - Für i=A, j=C:  
     - Prüfe: A[A,B] = 1 und A[B,C] = 1 → füge Kante A→C hinzu.  
   - Aktualisierte Matrix:
     ```
     [ [0, 1, 1],
       [0, 0, 1],
       [0, 0, 0] ]
     ```

4. **Iteration k = 3 (Betrachte Knoten C):**  
   - Prüfe alle Kombinationen, es ergeben sich keine weiteren Änderungen.

**Ergebnis:**  
Die finale Matrix zeigt, dass neben den direkten Kanten auch der indirekte Pfad A→C existiert.

