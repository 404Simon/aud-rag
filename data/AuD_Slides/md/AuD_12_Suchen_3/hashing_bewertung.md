---
title: Bewertung von Hashing
description: Übersicht über Effizienz, Vor- und Nachteile von Hashing im Vergleich zu anderen Datenstrukturen.
tags:
    - Hashing
    - Bewertung
    - Effizienz
    - Algorithmus
---

# Bewertung von Hashing

**Effizienz:**
- **Suchen und Einfügen:** Durchschnittlich O(1) bei geringer Kollisionswahrscheinlichkeit.
- **Löschen:** O(1) bei Markierung, kann aber bei Reorganisation O(n) betragen.

**Nachteile:**
- Ab einem hohen Füllungsgrad (ca. 80%) verschlechtert sich die Performance drastisch.
- Hashing unterstützt keine Operationen, die eine Reihenfolge erfordern (z. B. Minimum, Maximum, Bereichsabfragen).

**Vergleich:**  
Im Gegensatz zu Baumstrukturen (z. B. AVL-Bäumen) eignen sich Hash-Tabellen hervorragend für schnelle, ungeordnete Zugriffe.

