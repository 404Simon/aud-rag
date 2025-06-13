---
title: Hash-Funktion Variante 2 – Erste Zeichen codieren (gerade/ungerade)
description: Erklärung einer Hash-Funktion, die das erste Zeichen eines Strings in zwei Kategorien (gerade/ungerade) einteilt.
tags:
    - Hashing
    - Hash-Funktion
    - Algorithmus
    - Beispiel
---

# Hash-Funktion: Variante 2 – Erste Zeichen codieren (gerade/ungerade)

**Beschreibung:**
Hier wird das erste Zeichen eines Strings geprüft:
- Hat es einen geraden ASCII-Wert, wird der Wert 3 zurückgegeben.
- Andernfalls wird 4 zurückgegeben.

**Implementierung:**
```c
int hash_2(String s) {
    if (s.charAt(0) % 2 == 0)
        return 3;
    else
        return 4;
}
```

**Ergebnis und Bewertung:**
- Etwas bessere Verteilung als bei der konstanten Funktion.
- Dennoch führt die Methode zu einer ungleichmäßigen Nutzung der Hash-Tabelle (65 Suchschritte).

