---
title: Übung 2 – AVL-Baum Rotationen zeichnen (symmetrische Fälle)
description: Schritt-für-Schritt-Lösung zur Darstellung der vier Rotationsfälle (Rechtsrotation, Links-Rechts-, Linksrotation und Rechts-Link-Rotation) in AVL-Bäumen.
tags:
    - Übung
    - AVL-Baum
    - Rotation
    - Lösung
---

# Übung 2 – AVL-Baum Rotationen (symmetrische Fälle)

In AVL-Bäumen treten beim Einfügen und Löschen Rotationen auf, um die Balance zu erhalten. Es gibt vier grundlegende Fälle:

## Fall 1: Rechtsrotation (LL-Fall)
**Situation:**  
Ein Knoten \( k \) hat einen Balancefaktor +2, und sein linkes Kind \( l \) weist einen Balancefaktor von +1 oder 0 auf.

**Vorgehen:**  
- Führe eine Rechtsrotation an \( k \) durch.

**ASCII-Diagramm:**
```plaintext
Vor der Rotation:
      k(+2)
     /
   l(+1)
  /  \
B1   B2

Nach der Rechtsrotation:
      l(0)
     /  \
   B1    k(0)
         /
        B2
```

## Fall 2: Links-Rechts-Rotation (LR-Fall)
**Situation:**  
Ein Knoten \( k \) hat einen Balancefaktor +2, und sein linkes Kind \( l \) hat einen Balancefaktor –1.

**Vorgehen:**  
1. Führe eine Linksrotation an \( l \) durch, sodass \( m \) das neue Kind wird.
2. Danach eine Rechtsrotation an \( k \).

**ASCII-Diagramm:**
```plaintext
Vor Rotation:
      k(+2)
     /
   l(-1)
     \
      m(0)

Zwischenschritt (Linksrotation an l):
      k(+2)
     /
    m(0)
   /
  l(0)

Nach Rechtsrotation an k:
      m(0)
     /   \
   l(0)   k(0)
```

## Fall 3: Linksrotation (RR-Fall)
**Situation:**  
Ein Knoten \( k \) hat einen Balancefaktor –2, und sein rechtes Kind \( r \) hat einen Balancefaktor –1 oder 0.

**Vorgehen:**  
- Führe eine Linksrotation an \( k \) durch.

**ASCII-Diagramm:**
```plaintext
Vor der Rotation:
    k(-2)
      \
       r(-1)
      /  \
    B1   B2

Nach der Linksrotation:
       r(0)
      /  \
    k(0)  B2
     \
     B1
```

## Fall 4: Rechts-Link-Rotation (RL-Fall)
**Situation:**  
Ein Knoten \( k \) hat einen Balancefaktor –2, und sein rechtes Kind \( r \) hat einen Balancefaktor +1.

**Vorgehen:**  
1. Führe eine Rechtsrotation an \( r \) durch (innerhalb des rechten Teilbaums).
2. Danach eine Linksrotation an \( k \).

**ASCII-Diagramm:**
```plaintext
Vor Rotation:
    k(-2)
      \
       r(+1)
      /
     m(0)

Erst: Rechtsrotation bei r:
    k(-2)
      \
       m(0)
         \
          r(0)

Dann: Linksrotation bei k:
       m(0)
      /   \
    k(0)   r(0)
```

Diese Rotationsdiagramme illustrieren die symmetrischen Fälle, die beim Einfügen und Löschen in AVL-Bäumen auftreten können.

