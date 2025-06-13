---
title: Rechts-Link-Rotation in AVL-Bäumen
description: Lerne die Rechts-Link-Rotation kennen, die angewendet wird, wenn der rechte Unterbaum eines Knotens einen mittleren Überhang aufweist.
tags:
    - AVL-Baum
    - Rechts-Link-Rotation
    - Rotation
    - Balancierung
---

# Rechts-Link-Rotation in AVL-Bäumen

**Situation:** Der rechte Unterbaum eines Knotens `k` hat einen Überhang im linken Teilbaum seines rechten Kindes `l`.

**Vorgehen:**
1. Zunächst wird eine **Rechtsrotation** am Knoten `l` durchgeführt.
2. Anschließend eine **Linksrotation** am Knoten `k`.

**ASCII-Diagramm (vereinfacht):**
```plaintext
Vor Rotation:
    k(+2)
      \
       l(-1)
      /
     m(0)

Schritt 1: Rechtsrotation bei l:
    k(+2)
      \
       m(0)
        \
         l(0)

Schritt 2: Linksrotation bei k:
       m(0)
      /   \
    k(0)  l(0)
```

So wird die AVL-Balance wiederhergestellt.

