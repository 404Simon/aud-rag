---
title: Heap Sort – Baumbasiertes Sortieren  
description: Detaillierte Erklärung des Heap Sort, eines Sortierverfahrens, das auf dem Aufbau und der Auswertung eines Heaps basiert.  
tags:  
  - Heap Sort  
  - Heap  
  - Binärbaum  
  - Algorithmus  
---

# Heap Sort

Heap Sort arbeitet in zwei Phasen und basiert auf der **Heap-Eigenschaft** eines binären Baumes.

## Phase 1: Aufbau des Heaps

- **Ziel:**  
  Strukturiere das unsortierte Array als binären Baum (in Form eines Arrays).  
- **Eigenschaft eines MAX-HEAP:**  
  Jedes Elternelement ist größer oder gleich seinen Kindern.  
- **Navigationsfunktionen:**  
  - `PARENT(i) = (i - 1) DIV 2`  
  - `LEFT(i) = 2i + 1`  
  - `RIGHT(i) = 2i + 2`

- **Vorgehen:**  
  Starte bei den inneren Knoten (ab Index ⌊n/2⌋) und wende die Funktion **MAX-HEAPIFY** an, um die Heap-Eigenschaft rekursiv herzustellen.

## Phase 2: Sortierung durch Entfernen der Wurzel

1. **Wurzel ausgeben:**  
   Das größte Element befindet sich in der Wurzel (Index 0).

2. **Austausch und Reduktion:**  
   Tausche das letzte Element mit der Wurzel, reduziere die Heap-Größe und stelle mit MAX-HEAPIFY erneut die Heap-Eigenschaft her.

3. **Wiederholung:**  
   Wiederhole den Vorgang, bis der Heap leer ist.

## Pseudocode für MAX-HEAPIFY

```
MAX-HEAPIFY(A, i):
  l = LEFT(i)
  r = RIGHT(i)
  if l ≤ A.heapSize and A[l] > A[i]:
    largest = l
  else:
    largest = i
  if r ≤ A.heapSize and A[r] > A[largest]:
    largest = r
  if largest ≠ i:
    swap(A[i], A[largest])
    MAX-HEAPIFY(A, largest)
```

## ASCII-Darstellung eines Heaps

```
         [57]
        /    \
     [16]    [62]
     /   \    /  \
  [30] [80] [7]  [21]
  /    \
[78]  [41]
```

Durch den wiederholten Austausch und das Absinken der Elemente wird das Array schrittweise sortiert.

