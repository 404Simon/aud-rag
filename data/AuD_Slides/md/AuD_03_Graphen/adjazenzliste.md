---
title: Adjazenzliste
description: Effiziente Darstellung von Graphen mittels Adjazenzlisten, bei denen für jeden Knoten seine direkten Nachbarn gespeichert werden.
tags:
    - Graph
    - Adjazenzliste
    - Liste
    - Datenstruktur
---

# Adjazenzliste

Eine **Adjazenzliste** speichert für jeden Knoten \( v \) eine Liste seiner benachbarten Knoten.

**Vorteile:**
- Benötigt nur \( O(n + m) \) Speicher, wobei \( m \) die Anzahl der Kanten ist.
- Ermöglicht schnellen Zugriff auf alle Nachbarn eines Knotens.

**Beispiel:**
```
1: [2, 3]
2: [1, 4]
3: [1]
4: [2]
```

