---
title: Interpolationssuche in sortierten Feldern
description: Entdecke die Interpolationssuche, die den Suchbereich schätzt und damit unter bestimmten Bedingungen schneller als die binäre Suche arbeitet.
tags:
    - Interpolationssuche
    - Algorithmus
    - Suchverfahren
    - Optimierung
---

# Interpolationssuche in sortierten Feldern

Die **Interpolationssuche** ist eine Optimierung der binären Suche, bei der statt des mittleren Elements eine Schätzung anhand der Schlüsselverteilung verwendet wird.

**Grundidee:**
- Nutzt die Annahme, dass die Schlüssel **gleichmäßig verteilt** sind.
- Berechnet eine **interpolierte Position** statt immer die Mitte zu wählen.

**Eigenschaften:**
- **Average Case:** Kann mit **O(log log n)** operieren, wenn die Verteilung ideal ist.
- **Worst Case:** Bei ungleichmäßiger Verteilung kann der Aufwand **O(n)** erreichen.

**Beispiel:**
Angenommen, ein Telefonbuch ist nach Nachnamen sortiert:
- Sucht man "Zausel", wird erwartet, dass sich der Eintrag im hinteren Bereich befindet.
- Sucht man "Abel", so liegt er eher am Anfang.

