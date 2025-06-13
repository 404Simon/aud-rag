---
title: Suchen in binären Suchbäumen
description: Erfahre, wie in einem binären Suchbaum ein bestimmter Knoten gefunden wird – Schritt für Schritt erklärt.
tags:
    - Binärer Suchbaum
    - Suche
    - Algorithmus
    - Datenstruktur
---

# Suchen in binären Suchbäumen

Das Suchen in einem BST erfolgt ähnlich wie das Einfügen:
1. Beginne an der Wurzel.
2. Vergleiche den Suchwert mit dem Knotenwert:
   - Ist der Wert gleich, wird der Knoten gefunden.
   - Ist der Suchwert kleiner, suche im linken Unterbaum.
   - Ist er größer, suche im rechten Unterbaum.
3. Setze die Suche fort, bis der Knoten gefunden oder ein leerer Unterbaum erreicht wird (dann ist das Element nicht vorhanden).

**Beispiel (Suche nach 68):**
```plaintext
57 → 68 > 57, gehe rechts
66 → 68 > 66, gehe rechts
68 → 68 gefunden
```

