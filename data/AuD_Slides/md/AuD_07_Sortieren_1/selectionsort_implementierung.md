---
title: Selection Sort Implementierung  
description: Klar strukturierter Pseudocode und Erklärung zur Implementierung von Selection Sort für Anfänger.  
tags:
    - Selection Sort
    - Implementierung
    - Pseudocode
    - Programmierung
---

# Selection Sort: Implementierung

**Pseudocode:**

```
for i = 0 to A.length - 2:
    min = i
    for j = i + 1 to A.length - 1:
        if A[j] < A[min]:
            min = j
    swap(A[i], A[min])
```

**Erklärung:**  
- Die äußere Schleife iteriert durch das Array.  
- In der inneren Schleife wird das kleinste Element im unsortierten Teil gefunden.  
- Anschließend wird das gefundene Minimum mit dem Element an Position *i* getauscht.

