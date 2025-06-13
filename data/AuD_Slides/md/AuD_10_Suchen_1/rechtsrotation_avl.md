---
title: Rechtsrotation in AVL-Bäumen
description: Lerne die Rechtsrotation kennen, die bei einem Überhang im linken Teilbaum eines AVL-Knotens angewendet wird.
tags:
    - AVL-Baum
    - Rechtsrotation
    - Rotation
    - Balancierung
---

# Rechtsrotation in AVL-Bäumen

**Situation:** Ein Knoten `k` hat einen Balancefaktor von –2, weil sein linker Kind `l` einen Überhang aufweist.

**Lösung:** Eine **Rechtsrotation** wird durchgeführt.

**ASCII-Diagramm:**
```plaintext
Vor der Rotation:
      k(-2)
     /
   l(-1)
  /   \
B1    B2

Nach der Rechtsrotation:
      l(0)
     /   \
   B1     k(0)
         /
       B2
```

Dies stellt die AVL-Eigenschaft wieder her.

