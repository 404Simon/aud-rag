---
title: Quadtrees – Erweiterte Bildkompression
description: Erklärung des Quadtree-Verfahrens zur Kompression von 2D-Daten, das auf der Lauflängencodierung basiert und Bildbereiche hierarchisch unterteilt.
tags:
    - Quadtrees
    - Bildkompression
    - RLE
    - Datenstruktur
---

# Quadtrees – Erweiterte Bildkompression

**Quadtrees** erweitern die Prinzipien der Lauflängencodierung auf zweidimensionale Daten (z. B. Bilder).

## Grundidee:
- **Hierarchische Unterteilung:**  
  Das Bild wird rekursiv in vier gleich große Bereiche unterteilt.
- **Blattknoten:**  
  Ein Bereich, der ausschließlich einen einheitlichen Wert besitzt, wird als Blattknoten gespeichert.
- **Interne Knoten:**  
  Bereiche mit unterschiedlichen Werten werden weiter unterteilt.

## Darstellung (ASCII-Art):
```
         [Gesamtbild]
           /   |   \   \
        Q1   Q2   Q3   Q4
```
- Jeder Knoten repräsentiert ein Rechteck im Bild.
- Für die Speicherung:  
  - Ein Knoten, der weiter unterteilt werden muss, wird mit `1` markiert.  
  - Blattknoten werden mit `0` markiert und ihr einheitlicher Wert wird gespeichert.

Diese Methode ermöglicht eine signifikante Reduktion des Speicherbedarfs bei Bildern mit großen homogenen Bereichen.

