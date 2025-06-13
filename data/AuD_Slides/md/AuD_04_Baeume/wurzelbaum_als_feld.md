---
title: Wurzelbaum als Feld
description: Darstellung eines Wurzelbaums als Array – Jeder Knoten speichert den Index seines Vorgängers, was eine effiziente Rückwärtssuche ermöglicht.
tags:
    - Wurzelbaum
    - Array
    - Datenstruktur
    - Effizienz
---

# Wurzelbaum als Feld

Ein **Wurzelbaum** kann kompakt in einem Array dargestellt werden:
- Jedes Array-Element speichert den **Index des Vorgängers** des entsprechenden Knotens.
- **Vorteil:** Schnelle Ermittlung des Pfads von einem Knoten zurück zur Wurzel.

**Beispiel:**
```
Index:      1   2   3   4   5   6   ...
Vorgänger:  0   1   1   2   3   3   ...
```
(Die Wurzel hat hier den Vorgängerwert 0.)

