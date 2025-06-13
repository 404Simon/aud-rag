---
title: Motivation und Einführung in B‑Bäumen
description: Erklärt, warum B‑Bäume für den externen Speicher entwickelt wurden, illustriert mit ASCII-Art, und welche Probleme sie lösen.
tags:
    - B‑Bäume
    - Motivation
    - Externer Speicher
    - Datenstrukturen
---

# Motivation und Einführung in B‑Bäumen

B‑Bäume wurden entwickelt, um große Datenmengen effizient auf externen Speichern (z. B. Festplatten) zu verwalten. Herkömmliche Suchstrukturen im Hauptspeicher sind für diese Aufgaben nicht geeignet, da:

- **Plattenspeicherzugriffe minimiert werden müssen:**  
  Plattenspeicherzugriffe sind etwa 10^6-mal langsamer als Zugriffe im Hauptspeicher.

- **Optimale Nutzung des Speicherplatzes:**  
  Datenblöcke (z. B. 2 kB, 4 kB, 8 kB) sollen möglichst voll ausgenutzt werden, um die Effizienz zu steigern.

**ASCII-Diagramm: Speicherzugriffe**

```
+------------------+      +---------------------+
| Hauptspeicher    |      | Plattenspeicher     |
| (schnelle Zugriffe) |   | (langsame Zugriffe) |
+------------------+      +---------------------+
```

Statt einzelne Datensätze zu laden, werden ganze Blöcke übertragen. Dadurch ist es sinnvoll, in einem Knoten mehrere Datensätze und Zeiger zu speichern – die Grundlage für den Mehrwege-Suchbaum, zu dem auch der B‑Baum gehört.

