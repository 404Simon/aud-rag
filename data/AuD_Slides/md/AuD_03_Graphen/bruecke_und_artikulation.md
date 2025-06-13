---
title: Brücke und Artikulation
description: Definition von Brücken (kritische Kanten) und Artikulationen (kritische Knoten) zur Bestimmung der Stabilität von Graphen.
tags:
    - Graph
    - Brücke
    - Artikulation
---

# Brücke und Artikulation

**Brücke:**  
Eine Kante \( e \) ist eine **Brücke**, wenn das Entfernen von \( e \) die Anzahl der Zusammenhangskomponenten erhöht (\( \text{comp}(G - e) > \text{comp}(G) \)).

**Artikulation:**  
Ein Knoten \( v \) ist eine **Artikulation**, wenn sein Entfernen (zusammen mit allen inzidenten Kanten) zu einer Zunahme der Anzahl der Zusammenhangskomponenten führt (\( \text{comp}(G - v) > \text{comp}(G) \)).
