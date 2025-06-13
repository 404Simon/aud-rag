---
title: Asymptotische Abschätzung & Big-O-Notation
description: Führt in die Big-O-Notation ein, die den Wachstumsgrad von Algorithmen bei steigender Eingabelänge beschreibt.
tags:
  - Big-O
  - Asymptotik
  - Komplexität
---

# Asymptotische Abschätzung & Big-O-Notation

Die Big-O-Notation abstrahiert die exakte Laufzeit eines Algorithmus und beschreibt nur den **qualitativen Verlauf**.

## Grundprinzip:
- **Definition:**  
  _f(n) = O(g(n))_, wenn es Konstanten _c > 0_ und _n₀_ gibt, sodass  
  ```
  f(n) ≤ c ⋅ g(n)   für alle n ≥ n₀.
  ```
- **Intuition:** Nur der dominierende Term wird berücksichtigt.
- **Visualisierung (ASCII-Art):**
  ```
       f(n)
        |        ****
        |      ***
        |     **   <-- f(n) wächst, bleibt aber unter c⋅g(n)
    c⋅g(n)|***************
        |________________ n
  ```

