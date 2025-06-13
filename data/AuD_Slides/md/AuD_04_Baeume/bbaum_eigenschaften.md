---
title: Definition und Eigenschaften von B‑Bäumen
description: Beschreibt die Struktur und Eigenschaften von B‑Bäumen mit Hilfe von ASCII-Art-Diagrammen.
tags:
    - B‑Bäume
    - Definition
    - Datenstruktur
    - Eigenschaften
---

# Definition und Eigenschaften von B‑Bäumen

Ein Baum heißt **B‑Baum der Ordnung m**, wenn folgende Kriterien erfüllt sind:

1. **Knotenfüllung:**  
   Jeder Knoten außer der Wurzel enthält mindestens _m_ und höchstens _2m_ Schlüssel.

2. **Kinderanzahl:**  
   Ein Knoten mit _k_ Schlüsseln besitzt genau _k + 1_ Nachfolger.

3. **Balanciertheit:**  
   Alle Blätter stehen auf derselben Ebene.

4. **Schlüsselanordnung:**  
   Die Schlüssel eines Knotens sind so angeordnet, dass:
   - Alle Schlüssel im ersten Kind < S₁,
   - Alle Schlüssel im letzten Kind > Sₖ,
   - Für 1 < i < k+1: Schlüssel im i‑ten Kind liegen zwischen Sᵢ₋₁ und Sᵢ.

**ASCII-Diagramm: Aufbau eines B‑Baum-Knotens**

```
       [ S1 | S2 | ... | Sk ]
       /    |     ...   |    \
  Kind1  Kind2       ...  Kind(k+1)
```

Diese Struktur sorgt für einen ausgeglichenen Baum mit schneller Suche und Update-Operationen.

