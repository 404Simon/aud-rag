---
title: Mehr-Wege-Mischen (Multi-Way Merging)  
description: Verfahren, das mehrere sortierte Sequenzen gleichzeitig zusammenführt, um die Anzahl der Mischvorgänge zu minimieren.  
tags:
    - Mehr-Wege-Mischen
    - Multi-Way Merge
    - Mischen
    - externer Sortieralgorithmus
---

# Mehr-Wege-Mischen (Multi-Way Merging)

**Kernidee:**  
Statt nur zwei sortierte Sequenzen zusammenzuführen, werden beim Mehr-Wege-Mischen mehrere Sequenzen (z. B. drei oder mehr) gleichzeitig gemischt.

**Ablauf:**  
1. **Verzicht auf separates Trennen:**  
   Beim ersten Schritt werden die Läufe direkt gemischt und dabei sofort wieder in getrennte Dateien abgelegt.  
2. **Reihenfolge:**  
   Es wird abwechselnd von zwei Dateien in eine dritte gemischt, dann wieder umgekehrt – bis nur noch eine sortierte Sequenz übrig bleibt.

**Besonderheiten:**  
- Die Anzahl der Läufe auf den nicht-leeren Dateien kann Fibonacci-Zahlen ähneln, was zu einer minimalen Anzahl von Mischvorgängen führt.  
- Probleme können bei der Verteilung der "Restelemente" auftreten, wenn die Anzahl der Elemente nicht exakt passt.

