---
title: Selection Sort Analyse und Bewertung  
description: Bewertung von Selection Sort bezüglich der Anzahl der Vergleiche, Vertauschungen und der allgemeinen Effizienz im Vergleich zu anderen Algorithmen.  
tags:
    - Selection Sort
    - Analyse
    - Bewertung
    - Komplexität
---

# Selection Sort: Analyse und Bewertung

**Analyse:**  
- **Vergleiche:** Immer alle möglichen Paare werden verglichen – im ersten Durchgang (n-1 Vergleiche), im zweiten (n-2) usw.  
- **Vertauschungen:** Genau ein Tausch pro Durchgang, was oft effizienter ist als beim Bubble Sort.

**Bewertung:**  
- **Laufzeit:** Trotz geringerer Anzahl von Vertauschungen bleibt die Gesamtkomplexität O(n²).  
- **Optimierungspotenzial:** Keine Möglichkeit für einen vorzeitigen Abbruch, da immer alle Vergleiche nötig sind.

