---
title: Implementierung von Counting Sort  
description: Schritt-für-Schritt Pseudocode und Erklärungen zur Implementierung des Counting Sort Algorithmus.  
tags:
    - Counting Sort
    - Pseudocode
    - Implementierung
    - Algorithmus
---

# Implementierung von Counting Sort

**Pseudocode:**  
```pseudo
// 1. Hilfsfeld H initialisieren für Werte 0 bis k
for i = 0 to k:
    H[i] = 0

// 2. Zählen der Vorkommen
for j = 1 to n:
    H[A[j]]++

// 3. Werte ins Ergebnisfeld B kopieren
actualIndex = 0
for i = 0 to k:
    for j = 1 to H[i]:
        B[actualIndex] = i
        actualIndex++
```

**Erklärung:**  
- **Initialisierung:** Das Hilfsfeld H speichert die Häufigkeit jedes möglichen Schlüssels.  
- **Zählen:** Für jeden Wert in A wird der entsprechende Zähler in H um eins erhöht.  
- **Kopieren:** Danach werden in einem zweiten Durchgang die Werte gemäß ihrer gezählten Häufigkeit in das Ausgabefeld B geschrieben.

**Hinweis:** Diese Variante speichert das Ergebnis in einem separaten Feld B, was den Algorithmus einfach und übersichtlich macht.

