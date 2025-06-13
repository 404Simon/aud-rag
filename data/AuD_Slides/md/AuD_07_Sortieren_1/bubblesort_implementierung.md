---
title: Bubble Sort Implementierung  
description: Pseudocode und Erläuterung der Implementierung des Bubble Sort Algorithmus in einfacher und verständlicher Form.  
tags:
    - Bubble Sort
    - Implementierung
    - Pseudocode
    - Programmierung
---

# Bubble Sort: Implementierung

**Pseudocode:**

```
for i = 0 to A.length - 1:
    for j = A.length - 1 downto i + 1:
        if A[j] < A[j-1]:
            swap(A[j], A[j-1])
```

**Erklärung:**  
- Die äußere Schleife (Index *i*) gibt die Anzahl der Durchgänge vor.  
- Die innere Schleife (Index *j*) durchläuft das unsortierte Segment des Arrays.  
- Wird ein Element gefunden, das kleiner ist als sein Vorgänger, werden die beiden Elemente vertauscht.  
- Nach jedem Durchgang wird das größte Element an die richtige Position "gebubbelt".

