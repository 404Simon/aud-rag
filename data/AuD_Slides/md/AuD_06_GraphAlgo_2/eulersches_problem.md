---
title: Euler'sches Problem
description: Ausführliche Erklärung des Euler'schen Problems, wie der Test auf einen Eulerkreis funktioniert, inklusive detailliertem Beispiel und Pseudocode.
tags:
    - Euler
    - Eulerscher Kreis
    - Graph
    - Beispiel
---

# Euler'sches Problem – Vertiefte Erklärung mit Beispiel

**Grundidee:**  
Ein Graph besitzt einen Eulerkreis, wenn jede Kante genau einmal durchlaufen wird und der Kreis am Ausgangspunkt endet. Dies ist möglich, wenn jeder Knoten einen geraden Grad hat.

**Testverfahren – Schritt für Schritt:**

1. **Initialisierung:**  
   - Erstelle ein Array *f[]* für die Knotengrade und setze alle Werte auf 0.

2. **Durchlauf:**  
   - Gehe jede Kante im Graphen durch und erhöhe für beide Endknoten den entsprechenden Wert in *f[]* um 1.

3. **Prüfung:**  
   - Überprüfe, ob alle Werte in *f[]* gerade sind.  
   - Falls ja, besitzt der Graph einen Eulerkreis.

**Konkretes Beispiel:**  
- Graph:  
  - Knoten: A, B, C, D  
  - Kanten: A–B, B–C, C–D, D–A, A–C
- Berechnung der Grade:  
  - A: verbunden mit B, D, C → Grad 3 (ungerade)  
  - B: verbunden mit A, C → Grad 2 (gerade)  
  - C: verbunden mit B, D, A → Grad 3 (ungerade)  
  - D: verbunden mit C, A → Grad 2 (gerade)  
- Ergebnis: Da A und C ungerade Grade haben, existiert kein Eulerkreis in diesem Graphen.

