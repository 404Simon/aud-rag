---
title: Bubble Sort Schritt-für-Schritt Beispiel  
description: Detailliertes Schritt-für-Schritt Beispiel des Bubble Sort, das die Abfolge von Vergleichen und Vertauschungen verdeutlicht.  
tags:
    - Bubble Sort
    - Beispiel
    - Schritt-für-Schritt
    - Sortieralgorithmen
---

# Bubble Sort: Schritt-für-Schritt Beispiel

Angenommen, wir sortieren das Array:  
```
[5, 33, 12, 13, 8, 1, 41]
```

**Durchgang 1:**
1. Vergleiche 5 und 33: korrekt (5 < 33) → kein Tausch.
2. Vergleiche 33 und 12: falsch (33 > 12) → **Tausch** → Array: `[5, 12, 33, 13, 8, 1, 41]`
3. Vergleiche 33 und 13: falsch (33 > 13) → **Tausch** → Array: `[5, 12, 13, 33, 8, 1, 41]`
4. Vergleiche 33 und 8: falsch (33 > 8) → **Tausch** → Array: `[5, 12, 13, 8, 33, 1, 41]`
5. Vergleiche 33 und 1: falsch (33 > 1) → **Tausch** → Array: `[5, 12, 13, 8, 1, 33, 41]`
6. Vergleiche 33 und 41: korrekt (33 < 41) → kein Tausch.

Nach dem 1. Durchgang steht das größte Element (41) an der richtigen Position.

**Weitere Durchgänge:**  
Wiederhole den Vorgang, wobei sich der zu sortierende Bereich verkleinert, bis das gesamte Array sortiert ist.

