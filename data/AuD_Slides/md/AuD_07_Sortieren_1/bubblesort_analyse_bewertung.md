---
title: Bubble Sort Analyse und Bewertung  
description: Analyse von Bubble Sort hinsichtlich Korrektheit, Termination, Anzahl der Vergleiche und Vertauschungen sowie Laufzeitkomplexität.  
tags:
    - Bubble Sort
    - Analyse
    - Bewertung
    - Komplexität
---

# Bubble Sort: Analyse und Bewertung

**Korrektheit und Termination:**  
- Bei jedem Durchgang wird das größte Element in den unsortierten Bereich nach rechts bewegt.  
- Der Algorithmus terminiert, wenn ein Durchgang ohne Vertauschung abgeschlossen wird.

**Laufzeitanalyse:**  
- **Vergleiche:** Im 1. Durchgang (n-1 Vergleiche), im 2. (n-2) usw.  
- **Vertauschungen:** Abhängig von der Anfangsreihenfolge; im Worst-Case quadratisch.  
- **Komplexität:** Im Durchschnitt und im Worst-Case liegt die Zeitkomplexität bei O(n²).

**Optimierung:**  
Ein "Wächter" (Flag) kann eingeführt werden, um den Algorithmus vorzeitig zu beenden, wenn keine Vertauschungen mehr erfolgen – allerdings bringt dies bei Bubble Sort oft nur geringe Verbesserungen.

