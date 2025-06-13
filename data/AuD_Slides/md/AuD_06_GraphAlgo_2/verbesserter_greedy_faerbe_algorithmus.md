---
title: Verbesserter Greedy-Färbe-Algorithmus
description: Detaillierte Darstellung der Optimierung des Greedy-Algorithmus durch zusätzliches Tracking der vergebenen Farben, inklusive Schritt-für-Schritt-Anleitung.
tags:
    - Greedy
    - Optimierung
    - Graphfärbung
    - Algorithmus
---

# Verbesserter Greedy-Färbe-Algorithmus – Vertiefte Erklärung

**Optimierungsidee:**  
Durch Einsatz eines Hilfsarrays (z. B. *v[]*) werden die Farben der benachbarten Knoten effizient markiert, sodass der Algorithmus direkt die kleinste nicht belegte Farbe finden kann, ohne alle Farben mehrfach prüfen zu müssen.

**Schritt-für-Schritt-Prozess:**  

1. **Initialisierung:**  
   - f[1..n] = 0 (alle Knoten unbesetzt)  
   - v[1..∆+1] = 0, wobei ∆ der maximale Grad (maximale Anzahl benachbarter Knoten) ist.

2. **Verfahren:**  
   - Beginne mit Knoten 1 und weise z. B. Farbe 1 zu: f[1] = 1.
   - Für jeden weiteren Knoten i:
     - **Markierung:**  
       Gehe alle Nachbarn j von i durch und markiere in v[], welche Farben bereits vergeben sind (setze v[f[j]] = 1).
     - **Farbwahl:**  
       Suche im Array v[] die kleinste Indexposition, bei der der Wert 0 ist. Diese Position entspricht der kleinsten freien Farbe.
     - **Zuweisung:**  
       Weise Knoten i diese Farbe zu: f[i] = gefundene Farbe.
     - **Zurücksetzen:**  
       Entferne die Markierung in v[] für die Nachbarn, damit der nächste Knoten von einem sauberen Array ausgehen kann.

**Konkretes Beispiel:**  

Betrachten wir einen Knoten i, der 3 Nachbarn hat, die Farben 1, 3 und 2 besitzen.  
- Initial: v = [0, 0, 0, 0]  
- Nach Markierung:  
  - v[1] = 1 (Farbe 1 vergeben)  
  - v[2] = 1 (Farbe 2 vergeben)  
  - v[3] = 1 (Farbe 3 vergeben)  
- Suche: Der erste Index mit 0 wäre v[4].  
- Knoten i erhält also Farbe 4, wenn keine der Farben 1 bis 3 verfügbar ist.

Diese Optimierung reduziert den Aufwand beim Finden der nächsten freien Farbe und verbessert die Gesamtleistung des Algorithmus.

