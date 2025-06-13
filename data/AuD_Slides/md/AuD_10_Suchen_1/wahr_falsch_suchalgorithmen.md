---
title: Übung 4 – Wahr/Falsch-Aufgaben zu Suchalgorithmen
description: Schritt-für-Schritt-Lösungen zu Wahr/Falsch-Fragen, die typische Missverständnisse bei Suchalgorithmen und Baumstrukturen klären.
tags:
    - Übung
    - Wahr/Falsch
    - Suchalgorithmen
    - Lösung
---
# Übung 4 – Wahr/Falsch-Aufgaben

Beurteile die folgenden Aussagen:

1. **Aussage:** "Einfügen im binären Suchbaum geschieht immer im linken Teilbaum."  
   **Lösungsschritte:**  
   - Beim Einfügen wird der neue Knoten durch Vergleich entweder im linken (wenn kleiner) oder im rechten (wenn größer) Teilbaum platziert.  
   **Ergebnis:** **Falsch.**

2. **Aussage:** "Jeder Heap ist ein binärer Suchbaum."  
   **Lösungsschritte:**  
   - Heaps erfüllen die Heap-Eigenschaft (Min-Heap oder Max-Heap) und nicht zwingend die Ordnungsregel eines BSTs.  
   **Ergebnis:** **Falsch.**

3. **Aussage:** "Suchen in einem Feld hat konstanten Aufwand."  
   **Lösungsschritte:**  
   - In unsortierten Feldern erfolgt die lineare Suche mit O(n) im Worst Case. Nur direkter Indexzugriff ist O(1).  
   **Ergebnis:** **Falsch.**

4. **Aussage:** "Bei gewichtsbalancierten Bäumen ist der Faktor α möglichst klein zu wählen."  
   **Lösungsschritte:**  
   - Ein zu kleiner α führt zu zu häufigen Reorganisationen oder Degeneration. Praktische Werte (z. B. 0,3) sind moderat.  
   **Ergebnis:** **Falsch.**

5. **Aussage:** "AVL-Bäume sind höhenbalancierte Suchbäume."  
   **Lösungsschritte:**  
   - AVL-Bäume stellen durch Beschränkung der Höhendifferenz (maximal 1) sicher, dass sie nahezu perfekt balanciert sind.  
   **Ergebnis:** **Wahr.**

