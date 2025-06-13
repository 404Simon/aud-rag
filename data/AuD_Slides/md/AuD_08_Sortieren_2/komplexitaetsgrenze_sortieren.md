---
title: Komplexitätsgrenze vergleichsbasierter Sortierverfahren  
description: Erklärung des Beweises, warum vergleichsbasierte Sortieralgorithmen im schlimmsten Fall nicht schneller als O(n ⋅ log₂n) sein können.  
tags:  
  - Komplexität  
  - Sortieren  
  - Entscheidungsbaum  
  - Algorithmus  
---

# Komplexitätsgrenze beim Sortieren

Vergleichsbasierte Sortierverfahren arbeiten ausschließlich durch den Vergleich von Elementen. Ein fundamentaler Beweis zeigt, dass sie im schlimmsten Fall mindestens O(n ⋅ log₂n) Vergleiche benötigen.

## Entscheidungsbaum-Modell

- **Anzahl möglicher Permutationen:**  
  Für n verschiedene Elemente gibt es n! mögliche Anordnungen.

- **Entscheidungsbaum:**  
  Jeder Vergleich teilt die Menge möglicher Sortierungen in zwei Teilmengen (z. B. "A < B" oder "A ≥ B").  
  Ein Entscheidungsbaum, der alle n! Permutationen als Blätter enthält, muss mindestens eine Tiefe von log₂(n!) erreichen.

- **Stirlingsche Formel:**  
  Für große n gilt:  
  ```
  log₂(n!) ≈ n ⋅ log₂(n)
  ```
  Somit kann kein vergleichsbasierter Algorithmus im Worst Case schneller als O(n ⋅ log₂n) sein.

## ASCII-Diagramm eines Entscheidungsbaums (vereinfacht)

```
            [Start]
             /   \
         < Vergleich >
           /       \
      Permutationen ...  
         (n!/2)     (n!/2)
```

Jeder Vergleich reduziert die Anzahl möglicher Permutationen – frühestens nach ca. n ⋅ log₂n Vergleichen ist die richtige Reihenfolge eindeutig bestimmt.

