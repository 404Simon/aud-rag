---
title: Definition des binären Suchbaums
description: Erfahre, was einen binären Suchbaum ausmacht – eine Datenstruktur zur effizienten Suche in hierarchisch geordneten Daten.
tags:
    - Binärer Suchbaum
    - Datenstruktur
    - Algorithmus
    - Baum
---

# Definition des binären Suchbaums

Ein **binärer Suchbaum (BST)** ist ein Baum, bei dem jeder Knoten einen Schlüssel enthält und folgende Eigenschaften gelten:
- **Linker Unterbaum:** Alle Schlüssel sind kleiner als der Knotenwert.
- **Rechter Unterbaum:** Alle Schlüssel sind größer als der Knotenwert.
- **Rekursive Struktur:** Beide Unterbäume sind ebenfalls binäre Suchbäume (oder leer).

Beispiel:
```plaintext
       57
      /  \
    16    68
      \
      30
```
Hier gilt: 16 < 57 < 68 und 30 > 16.

