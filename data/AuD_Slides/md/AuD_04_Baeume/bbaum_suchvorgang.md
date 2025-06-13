---
title: Suchvorgang in B‑Bäumen
description: Erklärt den Schritt-für-Schritt-Suchprozess in B‑Bäumen, unterstützt durch ein ASCII-Art-Diagramm.
tags:
    - B‑Bäume
    - Suche
    - Algorithmus
    - Datenstrukturen
---

# Suchvorgang in B‑Bäumen

Die Suche in einem B‑Baum erfolgt rekursiv:

1. **Start an der Wurzel:**  
   Beginne an der Wurzel.

2. **Knotenuntersuchung:**  
   Vergleiche den gesuchten Schlüssel mit den Schlüsselwerten im aktuellen Knoten und bestimme das passende Intervall.

3. **Nachfolger wählen:**  
   Gehe in das Kind, dessen Schlüsselbereich den gesuchten Schlüssel umfasst, und wiederhole den Vorgang.

**ASCII-Diagramm: Suche in einem Knoten**

```
         [ 30 | 50 | 70 ]
         /     |     \
  (<30) /  (30-50)| (50-70)\ (>70)
```

Wird der Schlüssel nicht gefunden und ein Blatt erreicht, existiert der Schlüssel nicht im Baum.

