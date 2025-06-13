---
title: Quick Sort – Schnelles Teilen und Erobern  
description: Erklärung von Quick Sort inklusive Pivotwahl, Partitionierung und rekursiver Sortierung im Divide-and-Conquer-Stil.  
tags:  
  - Quick Sort  
  - Partitionierung  
  - Divide and Conquer  
  - Algorithmus  
---

# Quick Sort

Quick Sort ist ein rekursiver Sortieralgorithmus, der das **Divide and Conquer-Prinzip** verwendet.

## Grundprinzip

1. **Pivotwahl:**  
   Wähle ein beliebiges Element (das **Pivotelement**) aus dem Array, z. B. das erste, letzte, mittlere oder den Median von drei Elementen.

2. **Partitionierung:**  
   Teile das Array in zwei Teilmengen:
   - **KL:** Elemente, die kleiner als das Pivot sind.  
   - **GR:** Elemente, die größer als das Pivot sind.

   Dabei wird das Array *in-place* umgeordnet, sodass alle Elemente von KL links und alle von GR rechts vom Pivot stehen.

3. **Rekursion:**  
   Wende Quick Sort rekursiv auf beide Teilmengen an. Sobald eine Teilmenge nur noch ein Element enthält, ist sie sortiert.

## Pseudocode

```
QuickSort(A, p, r):
  if p < r:
    q = PARTITION(A, p, r)
    QuickSort(A, p, q-1)
    QuickSort(A, q+1, r)
```

## Partitionierungsroutine

```
PARTITION(A, p, r):
  x = A[r]               // Pivot
  i = p - 1
  for j = p to r-1:
    if A[j] ≤ x:
      i = i + 1
      swap(A[i], A[j])
  swap(A[i+1], A[r])
  return i + 1
```

## Beispiel

- **Pivot:** Angenommen, p = 41.  
- **Teilung:**  
  Das Array wird in eine Teilmenge mit Elementen < 41 und eine mit Elementen > 41 unterteilt.  
- **Rekursive Aufrufe:**  
  Beide Teilmengen werden sortiert, bis das gesamte Array geordnet ist.

Die Wahl des Pivotelements beeinflusst maßgeblich die Effizienz – im besten Fall entsteht eine nahezu gleich große Aufteilung, im schlimmsten Fall jedoch eine unbalancierte (O(n²) Laufzeit).

