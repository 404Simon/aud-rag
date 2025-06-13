---
title: Merge Sort – Rekursive Teilung und Zusammenführung  
description: Detaillierte Erklärung des Merge Sort, der mittels rekursiver Teilung und geordnetem Zusammenführen sortiert.  
tags:  
  - Merge Sort  
  - Divide and Conquer  
  - Rekursion  
  - Algorithmus  
---

# Merge Sort

Merge Sort basiert auf dem **Divide and Conquer-Prinzip** und sortiert durch rekursive Aufteilung und anschließendes Zusammenführen.

## Ablauf

1. **Teilschritte (Divide):**  
   Zerlege das Array rekursiv in zwei Hälften, bis jede Teilsequenz aus einem einzigen Element besteht.

2. **Zusammenführen (Conquer):**  
   Führe benachbarte sortierte Teilsequenzen zusammen, indem du sie schrittweise vergleichst und in eine neue, sortierte Sequenz überträgst.

3. **Rekursion:**  
   Der Zusammenführungsschritt wird rekursiv durchgeführt, bis das gesamte Array sortiert ist.

## Pseudocode

```
MergeSort(A, p, r):
  if p < r:
    q = (p + r) DIV 2
    MergeSort(A, p, q)
    MergeSort(A, q+1, r)
    Merge(A, p, q, r)
```

## Zusammenführen (Merge)

Beim Merge-Schritt werden zwei bereits sortierte Teilarrays (A[p..q] und A[q+1..r]) zu einem sortierten Array kombiniert.  
Stelle dir das so vor:

```
A[p..q]:  [2, 5, 9]
A[q+1..r]:[1, 3, 7]
```

Durch schrittweises Vergleichen entsteht:

```
[1, 2, 3, 5, 7, 9]
```

Merge Sort garantiert eine Laufzeit von O(n ⋅ log₂n) in allen Fällen, benötigt jedoch zusätzlichen Speicher für die Zusammenführung.

