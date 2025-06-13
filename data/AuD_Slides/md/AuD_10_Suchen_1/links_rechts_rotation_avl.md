---
title: Links-Rechts-Rotation in AVL-Bäumen
description: Entdecke die Links-Rechts-Rotation, die angewendet wird, wenn der linke Unterbaum eines Knotens einen mittleren Überhang aufweist.
tags:
    - AVL-Baum
    - Links-Rechts-Rotation
    - Rotation
    - Balancierung
---

# Links-Rechts-Rotation in AVL-Bäumen

**Situation:** Der linke Unterbaum eines Knotens `k` zeigt einen Überhang im rechten Teilbaum von `l` (dem linken Kind von `k`).

**Vorgehen:**
1. Führe eine **Linksrotation** am Knoten `l` durch.
2. Danach eine **Rechtsrotation** am Knoten `k`.

**ASCII-Diagramm (vereinfacht):**
```plaintext
Vor Rotation:
      k(-2)
     /
   l(+1)
     \
     m(0)

Erst: Linksrotation bei l:
      k(-2)
     /
   m(0)
  /
 l(0)

Dann: Rechtsrotation bei k:
     m(0)
    /   \
  l(0)   k(0)
```

Diese Doppelrotation korrigiert den Balancefaktor.

