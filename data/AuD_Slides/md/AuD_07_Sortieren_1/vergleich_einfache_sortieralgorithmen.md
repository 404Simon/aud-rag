---
title: Vergleich einfacher Sortieralgorithmen  
description: Vergleich von Bubble, Selection und Insertion Sort hinsichtlich ihrer Effizienz, Anzahl von Vergleichen/Vertauschungen und praktischen Unterschieden.  
tags:
    - Sortieralgorithmen
    - Vergleich
    - Bubble Sort
    - Selection Sort
    - Insertion Sort
---

# Vergleich einfacher Sortieralgorithmen

**Gemeinsamkeiten:**  
Alle drei Verfahren haben im Allgemeinen eine Laufzeitkomplexität von O(n²).

**Unterschiede:**  
- **Bubble Sort:**  
  - Vergleicht und tauscht benachbarte Elemente.  
  - Kann durch einen Wächter optimiert werden, wobei dies oft nur geringe Verbesserungen bringt.
- **Selection Sort:**  
  - Führt immer die vollständige Suche nach dem kleinsten Element durch.  
  - Führt weniger Vertauschungen aus als Bubble Sort.
- **Insertion Sort:**  
  - Benutzt das Prinzip des Einfügens in einen bereits sortierten Bereich.  
  - Benötigt im Durchschnitt weniger Vergleiche, jedoch können viele Verschiebungen anfallen.  
  - Bei bereits sortierten Daten läuft der Algorithmus sehr schnell (linear).

**Fazit:**  
Trotz gleicher asymptotischer Laufzeit zeigen die Algorithmen in der Praxis unterschiedliche Verhaltensweisen, die je nach Datensatz und Anwendung entscheidend sein können.

