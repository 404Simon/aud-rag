---
title: Geometrische Interpretation von Codes
description: Visualisiert Codes als Punkte in einem r-dimensionalen Raum und zeigt, wie die Hamming-Distanz als kürzester Weg zwischen diesen Punkten interpretiert wird.
tags:
    - Geometrie
    - Hamming-Distanz
    - Codierung
    - Vektorraum
---

# Geometrische Interpretation von Codes

Man kann Codewörter als Ecken eines r-dimensionalen Würfels (oder Hyperwürfels) betrachten:
- **Ecken:** Jedes Codewort entspricht einer Ecke.
- **Kanten:** Zwei Ecken sind verbunden, wenn sich die zugehörigen Codewörter in genau einem Bit unterscheiden.
- **Hamming-Distanz:** Entspricht dem minimalen „Weg“ (Anzahl der Kanten), der zwischen zwei Codewörtern zurückgelegt werden muss.

*ASCII-Art Beispiel (3-Bit-Würfel):*

```
       000 —— 001
        |       |
       010 —— 011
```

