---
title: Aufwand von Counting Sort  
description: Analyse von Laufzeit und Speicherbedarf des Counting Sort Algorithmus.  
tags:
    - Counting Sort
    - Aufwand
    - Laufzeit
    - Speicher
---

# Aufwand von Counting Sort

**Laufzeit:**  
- Die Zeitkomplexität beträgt O(n + k).  
  - O(n) für das Durchlaufen des Eingabefelds A.  
  - O(k) für das Durchlaufen des Hilfsfelds H zum Erzeugen des sortierten Felds.

**Speicherbedarf:**  
- Neben dem Eingabefeld wird ein zusätzliches Feld H der Größe k benötigt.

**Fazit:**  
Counting Sort ist besonders effizient, wenn der Wertebereich k nicht zu groß im Verhältnis zur Anzahl n der Elemente ist.

