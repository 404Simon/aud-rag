---
title: Entscheidungs- und Optimierungsproblem bei der Graphfärbung
description: Ausführliche Erläuterung der Unterschiede zwischen Entscheidungs- und Optimierungsproblem bei der Graphfärbung anhand eines konkreten Beispiels.
tags:
    - Graphfärbung
    - Entscheidungsproblem
    - Optimierungsproblem
    - Beispiel
---

# Entscheidungs- und Optimierungsproblem bei der Graphfärbung – Detailbeispiel

**Entscheidungsproblem:**  
Gegeben sei ein Graph G und die Frage, ob G mit z. B. 3 Farben gefärbt werden kann.

*Beispiel:*  
- Graph G: Knoten A, B, C, D mit Kanten: A–B, A–C, B–C, C–D  
- Frage: Ist G 3-färbbar?  
  - **Analyse:**  
    - Knoten A, B, C bilden ein Dreieck; dazu benötigt man 3 verschiedene Farben.  
    - Knoten D ist nur mit C verbunden und kann somit eine der anderen Farben erhalten.  
  - **Ergebnis:** Ja, G ist 3-färbbar.

**Optimierungsproblem:**  
Hier soll die minimale Anzahl an Farben ermittelt werden.

*Beispiel:*  
- Derselbe Graph G aus obigem Beispiel:  
  - Zunächst: Für den Dreieck (A, B, C) werden 3 Farben benötigt.  
  - Knoten D benötigt keine neue Farbe, da es z. B. die Farbe von A oder B annehmen könnte, sofern keine Kollision vorliegt.  
  - **Ergebnis:** Die chromatische Zahl χ(G) ist 3.

Diese Unterscheidung zeigt, dass das Entscheidungsproblem nur die Frage „Ja/Nein“ beantwortet, während das Optimierungsproblem die genaue minimale Anzahl an benötigten Farben findet.

