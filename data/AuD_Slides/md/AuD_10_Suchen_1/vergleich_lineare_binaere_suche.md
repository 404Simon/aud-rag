---
title: Vergleich Lineare vs. Binäre Suche
description: Vergleiche die Vor- und Nachteile von linearer und binärer Suche hinsichtlich Komplexität und Anwendungsfällen.
tags:
    - Suche
    - Algorithmusvergleich
    - Komplexität
    - Datenstrukturen
---

# Vergleich: Lineare vs. Binäre Suche

**Lineare Suche:**
- **Vorteile:** Einfach zu implementieren, keine Voraussetzung der Sortierung.
- **Nachteile:** Bei großen Datenmengen ineffizient (O(n)).

**Binäre Suche:**
- **Vorteile:** Sehr effizient in sortierten Feldern (O(log n)).
- **Nachteile:** Feld muss sortiert sein; zusätzliche Kosten für Sortierung und Aktualisierungen.

**Tabelle der maximalen Vergleiche:**
```plaintext
Anzahl Elemente    Lineare Suche    Binäre Suche
1.000              1.000            ca. 10
5.000              5.000            ca. 13
1.000.000          1.000.000        ca. 20
```

