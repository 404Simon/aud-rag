---
title: Binäre Suche in sortierten Feldern
description: Lerne, wie die binäre Suche in sortierten Feldern durch schrittweises Halbieren des Suchbereichs effizient zum Ziel führt.
tags:
    - Binäre Suche
    - Algorithmus
    - Sortierung
    - O(log n)
---

# Binäre Suche in sortierten Feldern

Die **binäre Suche** setzt voraus, dass das Feld **sortiert** ist. Der Algorithmus halbiert wiederholt den Suchbereich, bis das gesuchte Element gefunden oder ausgeschlossen wird.

**Ablauf:**
1. Vergleiche das mittlere Element des Feldes mit dem Suchwert.
2. Ist der Suchwert kleiner, fokussiere den linken Teil; ist er größer, den rechten.
3. Wiederhole die Schritte, bis das Element gefunden ist oder der Bereich leer wird.

**Komplexität:**
- **Best Case:** Element befindet sich im mittleren Bereich → **O(1)**
- **Worst/Average Case:** Etwa **O(log₂ n)** Vergleiche

Beispiel:
```plaintext
Sortiertes Feld: [7, 11, 16, 22, 29, 37, 45]
Suche: 29

Schritte:
1. Mitte = 22 → 29 > 22
2. Neuer Bereich: [29, 37, 45]
3. Mitte = 37 → 29 < 37
4. Neuer Bereich: [29] → Element gefunden
```

