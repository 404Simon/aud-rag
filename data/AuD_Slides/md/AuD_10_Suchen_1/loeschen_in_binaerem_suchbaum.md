---
title: Löschen in binären Suchbäumen
description: Lerne die drei Fälle des Löschens in einem BST und wie die Baumstruktur dabei erhalten bleibt.
tags:
    - Binärer Suchbaum
    - Löschen
    - Algorithmus
    - Datenstruktur
---

# Löschen in binären Suchbäumen

Beim **Löschen** eines Knotens im BST unterscheidet man drei Fälle:

1. **Knoten ist ein Blatt:** Direkt entfernen.
2. **Knoten hat einen leeren Unterbaum:** Den Knoten entfernen und den nicht-leeren Unterbaum hochrücken.
3. **Knoten hat zwei nicht-leere Unterbäume:**
   - Finde den **Inorder-Nachfolger** (kleinstes Element im rechten Unterbaum) oder den **Inorder-Vorgänger** (größtes Element im linken Unterbaum).
   - Tausche die Werte und lösche den nun einfacheren Fall (Fall 1 oder 2).

Beispiel (Löschen von 16):
```plaintext
Baum vor dem Löschen:
        57
       /  \
     16    68
       \
       30

Inorder-Nachfolger von 16 ist 30.
Tausche: 16 ↔ 30 und lösche den Blattknoten 16.
```

