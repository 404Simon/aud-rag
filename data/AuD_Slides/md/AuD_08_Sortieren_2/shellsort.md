---
title: Shell Sort – Vorsortierung mit variablen Abständen  
description: Erklärung von Shell Sort, einer Erweiterung des Insertion Sort durch Vorsortierung mittels abnehmender Abstände.  
tags:  
  - Shell Sort  
  - Insertion Sort  
  - Vorsortierung  
  - Algorithmus  
---

# Shell Sort

Shell Sort wurde 1959 von Donald Shell vorgeschlagen und erweitert den klassischen Insertion Sort um einen Parameter **h**, der angibt, in wie viele Teilsequenzen das Array unterteilt wird.  

## Vorgehensweise

1. **Initialisierung:**  
   Bestimme einen Startwert für *h* (z. B. mithilfe einer Folge wie 1, 4, 13, 40, ... oder alternativen Sequenzen aus der Literatur).

2. **Sortierung der h-Sequenzen:**  
   Zerlege das Array in *h* Gruppen. Jede Gruppe besteht aus Elementen, die *h* Positionen voneinander entfernt sind.  
   Beispiel (für h = 5):  
   ```
   Gruppe 1: Elemente an Position 1, 6, 11, …
   Gruppe 2: Position 2, 7, 12, …
   ...
   ```

3. **Insertion Sort in jeder Gruppe:**  
   Sortiere jede der h-Sequenzen mit Insertion Sort.

4. **Reduziere h:**  
   Bestimme den nächsten kleineren Wert für *h* und wiederhole den Sortiervorgang.  
   Wenn h = 1 erreicht ist, entspricht die Methode dem klassischen Insertion Sort.

## Beispiel

Angenommen, die Folge der *h*-Werte sei 5, 3, 1.  
- **Durchgang 1 (h = 5):**  
  Teile das Array in 5 Gruppen (z. B. Gruppe 1: 5, 1, 9; Gruppe 2: 33, 41, 38; usw.) und sortiere jede Gruppe separat.  
- **Durchgang 2 (h = 3):**  
  Erzeuge neue Gruppen anhand des Abstands 3 und sortiere diese.
- **Durchgang 3 (h = 1):**  
  Ein letzter Durchgang mit benachbarten Elementen führt zum endgültig sortierten Array.

Diese Methode reduziert die Anzahl der Verschiebungen im Vergleich zu reinem Insertion Sort erheblich und sorgt so für eine deutlich bessere Laufzeit.

