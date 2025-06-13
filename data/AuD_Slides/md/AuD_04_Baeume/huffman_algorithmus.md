---
title: Huffman-Algorithmus
description: Der Huffman-Algorithmus erzeugt einen optimalen Präfix-Code zur verlustfreien Datenkompression unter Berücksichtigung der Zeichenhäufigkeiten.
tags:
    - Huffman
    - Datenkompression
    - Präfix-Code
    - Algorithmus
---

# Huffman-Algorithmus

**Prinzip:**
1. **Initialisierung:**  
   Erzeuge für jedes Zeichen einen Baumknoten, versehen mit der relativen Häufigkeit.
2. **Iterative Vereinigung:**  
   Wähle die zwei Knoten mit der geringsten Häufigkeit und vereine sie zu einem neuen Baumknoten.  
3. **Wiederholung:**  
   Führe diesen Schritt fort, bis nur noch ein Baum übrig bleibt.
4. **Kodierung:**  
   Weise den Kanten:
   - **Linke Kante:** `0`
   - **Rechte Kante:** `1`  
   zu, sodass ein eindeutiger Präfix-Code entsteht.

**Vorteil:**  
Minimale mittlere Codewortlänge und damit effiziente Kompression.

**Beispiel:**  
Für den Text „AGNES HAT ANGST“ werden die Zeichen entsprechend ihrer Häufigkeit kodiert.

