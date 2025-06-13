---
title: Dynamische Datenstrukturen
description: Dynamische Datenstrukturen nutzen Zeiger, um flexible, speicheroptimierte Datenhaltung zu ermöglichen.
tags:
    - Dynamische Datenstrukturen
    - LinkedList
    - Pointer
    - Flexibilität
---

# Dynamische Datenstrukturen

Statt fester Größe (wie bei Arrays) nutzen sie Zeiger zur flexiblen Verwaltung.

**Beispiel: Einfach verkettete Liste**
```
[Head] → [Daten|Next] → [Daten|Next] → NULL
```
- Jeder Knoten enthält **Daten** und einen **Zeiger** auf den nächsten Knoten.
- Das letzte Element zeigt auf `NULL`.
- In Java wird dies mit Referenzen statt Zeigern umgesetzt.

