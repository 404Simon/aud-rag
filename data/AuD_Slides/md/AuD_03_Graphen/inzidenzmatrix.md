---
title: Inzidenzmatrix
description: Darstellung eines Graphen als \( n \times m \)-Matrix, die die Inzidenz (Knoten-Kanten-Beziehung) abbildet.
tags:
    - Graph
    - Inzidenzmatrix
    - Matrix
    - Datenstruktur
---

# Inzidenzmatrix

Für einen Graphen \( G \) mit \( n \) Knoten und \( m \) Kanten wird die **Inzidenzmatrix** \( I \) als \( n \times m \)-Matrix definiert, wobei:
- **Eintrag \( I_{ij} \):**  
  - 1, wenn der Knoten \( v_i \) inzident zu der Kante \( e_j \) ist.
  - 0, sonst.

**Eigenschaften:**
- Ermöglicht schnelle Abfragen der Beziehung zwischen Knoten und Kanten.
- Kann bei dünn besetzten Graphen speicherintensiv sein.
