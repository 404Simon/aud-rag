---
title: Counting Sort  
description: Effizienter, nicht-vergleichsbasierter Sortieralgorithmus, der Elemente durch Zählen ihrer Vorkommen sortiert.  
tags:
    - Counting Sort
    - Algorithmus
    - Sortieren
    - Datenstrukturen
---

# Counting Sort

**Grundprinzip:**  
Counting Sort sortiert ein Array, indem es die Häufigkeit jedes Schlüssels zählt. Vorausgesetzt wird, dass die möglichen Schlüsselwerte in einem bekannten Bereich liegen, z. B. M = {0, 1, …, k}.  

**Ablauf:**  
1. **Hilfsfeld initialisieren:**  
   Erzeuge ein Zählfeld H der Länge k+1, initialisiert mit Nullen.  
2. **Zählen:**  
   Iteriere über das Eingabefeld A und erhöhe für jeden Wert A[i] den entsprechenden Zähler in H.  
3. **Ausgabe:**  
   Durchlaufe H und gib jeden Schlüssel so oft aus, wie er gezählt wurde.

**Beispiel:**  
Eingabe A:  
```
5 4 1 4 6 1 3 0 0 5 5 7 2 2 5 7 0 2 7 7
```
Hilfsfeld H (nach dem Zählen):  
```
Index:   0  1  2  3  4  5  6  7
Zähler: [3, 2, 3, 1, 2, 4, 1, 4]
```
Ausgabefeld B (sortiert):  
```
0 0 0 1 1 2 2 2 3 4 4 5 5 5 5 6 7 7 7 7
```

