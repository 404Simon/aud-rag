---
title: Implementierung und Performance-Vergleich  
description: Übersicht zur Implementierung der Sortierverfahren und deren Laufzeitmessungen in unterschiedlichen Systemumgebungen.  
tags:  
  - Implementierung  
  - Performance  
  - Laufzeitmessung  
  - Sortieren  
---

# Implementierung und Performance-Vergleich

## Implementierungsdetails

- **Programmiersprache:**  
  Java-Implementierungen wurden verwendet, um die Algorithmen zu testen.

- **Datenmengen:**  
  Sortierung von Feldern mit Größen von 10.000 bis zu 10.000.000 Elementen.

- **Durchführung:**  
  Jeder Sortiervorgang wurde mehrfach (z. B. 100-mal) durchgeführt, um Durchschnittszeiten, minimale und maximale Zeiten zu ermitteln.

## Messumgebungen

- **Messung 1 (2005):**  
  Java 5, Intel 2.2 GHz, 256 MB RAM.  
- **Messung 2 (2019):**  
  Java 11, Intel Core i7 2.8 GHz, 32 GB RAM.

## Ergebnisse

- **Shell Sort, Heap Sort, Merge Sort:**  
  Zeigten konsistente O(n ⋅ log₂n)-Verläufe.  
- **Quick Sort:**  
  War im Mittel oft das schnellste interne Sortierverfahren, obwohl sein Worst Case O(n²) betragen kann.

Die Ergebnisse unterstreichen, dass in der Praxis neben der asymptotischen Laufzeit auch Faktoren wie konstante Faktoren und Speicherzugriffe eine wichtige Rolle spielen.

