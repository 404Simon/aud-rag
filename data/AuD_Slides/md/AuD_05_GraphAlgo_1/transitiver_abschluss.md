---
title: Transitiver Abschluss  
description: Erklärung und Berechnung des transitiven Abschlusses in gerichteten Graphen, inklusive schrittweiser Beispielrechnung.  
tags:
    - Graphen
    - Transitivität
    - Algorithmus
    - Theorie
---

# Transitiver Abschluss

Der **transitive Abschluss** eines gerichteten Graphen stellt sicher, dass wenn es einen Pfad von Knoten *A* über *B* zu *C* gibt, dann auch direkt eine Kante von *A* zu *C* existiert.

**Schritt-für-Schritt Beispiel:**  
Gegeben sei ein Graph mit den Kanten:  
- (A, B)  
- (B, C)

**Schritte:**  
1. **Überprüfung:**  
   - Prüfe, ob zwischen A und C bereits eine direkte Kante existiert.  
   - Da (A, C) nicht vorhanden ist, wird diese ergänzt.

2. **Ergebnis:**  
   - Der transitive Abschluss enthält die Kanten: (A, B), (B, C) und zusätzlich (A, C).

Das Verfahren stellt sicher, dass alle indirekten Zusammenhänge direkt abgebildet werden.

