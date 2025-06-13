---
title: Matrizenmultiplikation – Definition und Implementierung
description: Erklärt, wie Matrizen multipliziert werden und warum der Prozess O(n³) komplex ist.
tags:
  - Matrizenmultiplikation
  - Implementierung
  - Komplexität
---

# Matrizenmultiplikation – Definition und Implementierung

Zwei Matrizen können multipliziert werden, wenn die Spaltenzahl der ersten Matrix der Zeilenzahl der zweiten entspricht.

## Wesentliche Schritte:
- **Bedingung:**  
  - Multiplikation möglich, wenn die Dimensionen passen.
- **Berechnung:**  
  - Element (i,j) des Ergebnisses:  
    ```
    result[i][j] = Σ (m1[i][k] * m2[k][j])
    ```
- **Pseudocode:**
  ```java
  for (int i = 0; i < m1.rows; i++) {
      for (int j = 0; j < m2.columns; j++) {
          int sum = 0;
          for (int k = 0; k < m1.columns; k++) {
              sum += m1[i][k] * m2[k][j];
          }
          result[i][j] = sum;
      }
  }
  ```
- **Komplexität:** O(n³), wobei _n_ die maximale Dimension der Matrizen ist.

