---
title: Insertion Sort Implementierung  
description: Schritt-für-Schritt Pseudocode zur Implementierung von Insertion Sort, ideal für Einsteiger verständlich erklärt.  
tags:
    - Insertion Sort
    - Implementierung
    - Pseudocode
    - Programmierung
---

# Insertion Sort: Implementierung

**Pseudocode:**

```
for j = 2 to A.length:
    key = A[j]
    i = j - 1
    while i > 0 and A[i] > key:
        A[i+1] = A[i]
        i = i - 1
    A[i+1] = key
```

**Erklärung:**  
- Beginne beim zweiten Element (Index 2), da das erste Element als sortiert gilt.  
- Speichere das aktuelle Element (key) in einem Zwischenspeicher.  
- Vergleiche key mit den Elementen im bereits sortierten Teil und verschiebe größere Elemente eine Position nach rechts.  
- Füge key an der richtigen Stelle ein.

