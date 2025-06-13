---
title: Adjazenzmatrix
description: Darstellung von Graphen mittels Adjazenzmatrix – einer \( n \times n \)-Matrix, die Knoten-Nachbarschaften abbildet.
tags:
    - Graph
    - Adjazenzmatrix
    - Matrix
    - Datenstruktur
---

# Adjazenzmatrix

Eine **Adjazenzmatrix** stellt einen Graphen \( G = (V, E) \) als \( n \times n \)-Matrix dar, wobei \( n = |V| \).  
- **Eintrag \( a_{ij} \):**  
  - Bei ungerichteten Graphen: 1, wenn \( \{v_i, v_j\} \in E \), sonst 0.
  - Bei gerichteten Graphen: 1, wenn \( (v_i, v_j) \in E \), sonst 0.

**Eigenschaften:**
- Bei ungerichteten Graphen ist die Matrix symmetrisch.
- Bietet schnellen Zugriff auf Nachbarschaftsinformationen, benötigt jedoch \( n^2 \) Speicherplätze.

**Beispiel (ASCII-Art):**
```
[0 1 1 0]
[1 0 0 1]
[1 0 0 1]
[0 1 1 0]
```

