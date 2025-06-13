---
title: Balancefaktor in AVL-Bäumen
description: Lerne den Balancefaktor kennen, der in AVL-Bäumen die Höhenunterschiede der Unterbäume misst.
tags:
    - AVL-Baum
    - Balancefaktor
    - Algorithmus
    - Höhenbalancierung
---

# Balancefaktor in AVL-Bäumen

Der **Balancefaktor** eines Knotens in einem AVL-Baum ist definiert als:

```plaintext
Balancefaktor = Höhe(linker Unterbaum) - Höhe(rechter Unterbaum)
```

Mögliche Werte:
- **-1:** Rechter Unterbaum ist um eine Ebene höher.
- **0:** Beide Unterbäume haben die gleiche Höhe.
- **+1:** Linker Unterbaum ist um eine Ebene höher.

Diese Messung hilft dabei, den Baum während Einfüge- und Löschoperationen auszubalancieren.

