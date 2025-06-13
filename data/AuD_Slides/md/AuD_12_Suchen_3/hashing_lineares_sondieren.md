---
title: Lineares Sondieren
description: Ausführliche Schritt-für-Schritt-Anleitung zum linearen Sondieren als Methode der Kollisionsbehandlung.
tags:
    - Hashing
    - Lineares Sondieren
    - Kollisionsbehandlung
    - Algorithmus
---

# Lineares Sondieren

**Prinzip:**  
Wird an der berechneten Position (Index) bereits ein Element gefunden, so sucht man systematisch im Array weiter (Index + 1, +2, …).

**Algorithmus (Schritt für Schritt):**
1. **Start:** Berechne `i = h(key)`.
2. **Überprüfen:** Ist Position `i` frei? Falls ja, Einfügen.
3. **Sondieren:** Falls belegt, setze `i = (i + 1) mod TableSize` und wiederhole.
4. **Einfügen:** Sobald ein freier Platz gefunden wurde, füge den Schlüssel ein.

**ASCII-Darstellung:**

```
Index:   0  1  2  3  4  5  6  7  8  9
Tabelle: [ ] [ ] [X] [X] [ ] [ ] [ ] [ ] [ ] [ ]
```

Hierbei wird bei einer Kollision an Index 2 der nächste freie Platz gesucht.

