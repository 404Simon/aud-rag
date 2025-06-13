---
title: Grundbegriffe des Hashing
description: Einführung in Hashing, Hash-Funktionen und Hash-Tabellen als grundlegende Konzepte der Datenstrukturen.
tags:
    - Hashing
    - Datenstruktur
    - Hash-Funktion
    - Informatik
---

# Grundbegriffe des Hashing

Hashing bezeichnet die Abbildung einer großen Ausgangsmenge von Schlüsseln auf eine kleinere Zielmenge (z. B. Indizes) mithilfe einer Hash-Funktion.

**Kernbegriffe:**
- **Hash-Funktion (h):** Wandelt einen Schlüssel (Key) in einen Hash-Wert (Index) um.
- **Hash-Wert:** Das Ergebnis der Hash-Funktion; auch als Index bezeichnet.
- **Hash-Tabelle (H):** Datenstruktur, in der Elemente anhand ihres Hash-Werts abgelegt werden.

**Beispiel:**

Wenn die Hash-Funktion `h(key) = key mod 10` lautet, so ergibt der Schlüssel 23:

```
23 mod 10 = 3
```

Das Element wird also an Position 3 in der Hash-Tabelle gespeichert.

