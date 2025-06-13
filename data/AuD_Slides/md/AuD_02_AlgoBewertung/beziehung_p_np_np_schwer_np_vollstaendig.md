---
title: Beziehung zwischen P, NP, NP-Schwer und NP-Vollständig
description: Stellt das hierarchische Verhältnis der Komplexitätsklassen P, NP, NP-schwer und NP-vollständig dar.
tags:
  - Komplexitätsklassen
  - Hierarchie
  - P und NP
---

# Beziehung zwischen P, NP, NP-Schwer und NP-Vollständig

Das Verhältnis der verschiedenen Komplexitätsklassen wird hierarchisch dargestellt, um ihre Zusammenhänge zu verdeutlichen.

## Hierarchie:
- **P:**  
  - Probleme, die effizient (in polynomialer Zeit) lösbar sind.
- **NP:**  
  - Probleme, bei denen eine gegebene Lösung schnell verifiziert werden kann.
- **NP-schwer:**  
  - Probleme, auf die sich jedes NP-Problem in polynomialer Zeit reduzieren lässt.
- **NP-vollständig:**  
  - Probleme, die in NP liegen und zugleich NP-schwer sind.

## Visualisierung (ASCII-Diagramm):
```
     +----------------------+
     |         NP         |
     |   (Verifikation)     |
     +-----------+----------+
                 |
        +--------v---------+
        |   NP-Vollständig |
        |       (NPC)      |
        +------------------+
                 ^
                 |
        +--------+---------+
        |     NP-schwer    |
        +------------------+
```

