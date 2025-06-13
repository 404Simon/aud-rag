---
title: Einfügen in AVL-Bäumen und Balancierung
description: Verstehe, wie das Einfügen in AVL-Bäumen zu Ungleichgewichten führen kann und welche Rotationen zur Korrektur genutzt werden.
tags:
    - AVL-Baum
    - Einfügen
    - Balancierung
    - Rotation
---

# Einfügen in AVL-Bäumen und Balancierung

Beim **Einfügen** in einen AVL-Baum wird der neue Knoten zunächst wie in einem normalen BST als Blatt eingefügt. Dabei kann es passieren, dass der **Balancefaktor** eines Knotens außerhalb des erlaubten Bereichs (–1, 0, +1) liegt.

**Maßnahmen:**
- Suche den tiefsten Knoten entlang des Einfügepfads, der nun einen Balancefaktor von –2 oder +2 aufweist.
- Führe eine entsprechende **Rotation** durch, um den Baum wieder auszubalancieren.

Beispiel: Das Einfügen eines Wertes, der den linken Unterbaum übermäßig wachsen lässt, erfordert eine Rechtsrotation.

