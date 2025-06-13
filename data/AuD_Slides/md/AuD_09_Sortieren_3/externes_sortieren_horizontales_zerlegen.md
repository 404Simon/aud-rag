---
title: Externes Sortieren Horizontales Zerlegen  
description: Sortierung großer Dateien durch Aufteilung in kleinere, intern sortierbare Teildateien und anschließendes Zusammenführen.  
tags:
    - Externes Sortieren
    - horizontales Zerlegen
    - Teilsortierung
    - Merge
---

# Externes Sortieren: Horizontales Zerlegen

**Schritte:**  
1. **Zerlegen:**  
   Teile die unsortierte Datei in mehrere kleinere Dateien (Teildateien), die in den Hauptspeicher passen.

2. **Interne Sortierung:**  
   Sortiere jede Teildatei mit einem bekannten Sortieralgorithmus (z. B. Quicksort, Counting Sort).

3. **Zusammenführen (Merge):**  
   Füge die sortierten Teildateien zu einer final sortierten Datei zusammen.

**ASCII-Darstellung:**  
```
Unsortierte Datei
       │
   Zerlegen in
   Teildateien
       │
   [D1] [D2] ... [Dn]
       │
Interne Sortierung
       │
   [D1'] [D2'] ... [Dn']
       │
   Zusammenführen
       │
   Sortierte Datei
```

