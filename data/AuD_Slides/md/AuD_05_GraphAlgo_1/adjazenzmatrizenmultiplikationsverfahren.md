---
title: Adjazenzmatrizenmultiplikationsverfahren  
description: Methode zur Berechnung des transitiven Abschlusses mittels sukzessiver Potenzen der Adjazenzmatrix – inklusive Schritt-für-Schritt Beispiel.  
tags:
    - Graphen
    - Matrix
    - Algorithmus
    - Transitivität
---

# Adjazenzmatrizenmultiplikationsverfahren

Dieses Verfahren nutzt die Potenzen der **Adjazenzmatrix** *A*, um alle Pfade in einem Graphen zu finden.

**Beispiel:**  
Angenommen, ein Graph mit 3 Knoten (A, B, C) besitzt die Adjazenzmatrix:

```
A = [ [0, 1, 0],
      [0, 0, 1],
      [0, 0, 0] ]
```

**Schritte:**  
1. **Potenz 1 (A¹):**  
   - Gibt die direkten Kanten wieder.  
   - A¹ = A zeigt: A→B und B→C.

2. **Potenz 2 (A²):**  
   - Berechne A² = A · A.  
   - Ergebnis:  
     - Element (1,3): Da A→B und B→C existieren, wird A²[1,3] = 1 (entspricht Pfad A→B→C).  
   - A² =  
     ```
     [ [0, 0, 1],
       [0, 0, 0],
       [0, 0, 0] ]
     ```

3. **Zusammenführung:**  
   - Der transitive Abschluss wird durch das Vorhandensein eines Werts > 0 an einer Stelle (i,j) angezeigt.  
   - Daraus folgt, dass zusätzlich zur ursprünglichen Matrix auch der Pfad A→C existiert.

