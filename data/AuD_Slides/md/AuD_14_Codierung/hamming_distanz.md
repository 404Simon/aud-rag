---
title: Hamming-Distanz
description: Definiert die Hamming-Distanz als Maß zur Bestimmung der Fehleranfälligkeit von Codewörtern und zeigt, wie sie berechnet wird.
tags:
    - Hamming-Distanz
    - Fehlererkennung
    - Codierung
    - Bitvergleich
---

# Hamming-Distanz

Die **Hamming-Distanz** \(d(x, y)\) zwischen zwei Binärwörtern gleicher Länge ist die Anzahl der Stellen, an denen sich die Wörter unterscheiden.
- **Berechnung:**  
  - Führe ein XOR der beiden Wörter durch.  
  - Zähle die Anzahl der Einsen im Ergebnis.

*Beispiel:*  
Vergleiche 101011 und 101111:  
- XOR: 000100 → eine „1“ → Hamming-Distanz = 1.

