---
title: Aufwand und Komplexität in B‑Bäumen
description: Übersicht über die logarithmische Komplexität von B‑Baum-Operationen, illustriert durch eine ASCII-Tabelle.
tags:
    - B‑Bäume
    - Komplexität
    - Aufwand
    - Algorithmus
---

# Aufwand und Komplexität in B‑Bäumen

Die Operationen **Suchen**, **Einfügen** und **Löschen** in einem B‑Baum haben eine Zeitkomplexität von _O(logₘ(n))_, wobei _m_ die Ordnung des Baums ist. Das bedeutet, dass die Anzahl der Plattenzugriffe direkt von der Baumhöhe abhängt.

**ASCII-Tabelle: Plattenzugriffe (Ordnung 8)**

```
+-------------+------------------+
| Datensätze  | Zugriffe (Höhe)  |
+-------------+------------------+
|   1.000     |       4        |
|  10.000     |       5        |
| 100.000     |       6        |
|1.000.000    |       7        |
|2.000.000    |       7        |
|5.000.000    |       8        |
|10.000.000   |       8        |
+-------------+------------------+
```

Eine geringe Baumhöhe minimiert also die Anzahl der langsamen Plattenzugriffe.
