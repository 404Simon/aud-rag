---
title: Bucketsort Streuen und Sammeln
description: Bucketsort verteilt Elemente in verschiedene Fächer (Buckets) und sammelt sie anschließend sortiert wieder zusammen.
tags:
    - Bucketsort
    - Streuen und Sammeln
    - Algorithmus
    - Sortieren
---

# Bucketsort: Streuen und Sammeln

**Grundidee:**
Bucketsort (Sortieren durch Streuen und Sammeln) basiert auf der Verteilung von Elementen in sogenannte Buckets, in die Elemente anhand eines bestimmten Schlüssels (z. B. Postleitzahl, Bereichswerte) einsortiert werden.

**Ablauf:**
1. **Streuphase:**
   - Erzeuge für jeden möglichen Schlüssel oder Schlüsselbereich ein Bucket.
   - Gehe das Eingabefeld durch und ordne jedes Element dem passenden Bucket zu.

2. **Sortierung innerhalb der Buckets:**
   - Falls nötig, sortiere die Elemente in den einzelnen Buckets (z. B. mit einem bekannten internen Sortierverfahren).

3. **Sammelphase:**
   - Führe die Inhalte aller Buckets in der richtigen Reihenfolge zusammen, um das sortierte Endergebnis zu erhalten.

**ASCII-Illustration:**
```
Eingabe:   [ 23,  5, 17, 8, 11 ]
Buckets:
Bucket 5: [5]
Bucket 8: [8]
Bucket 11: [11]
Bucket 17: [17]
Bucket 23: [23]

Ausgabe: [5, 8, 11, 17, 23]
```

