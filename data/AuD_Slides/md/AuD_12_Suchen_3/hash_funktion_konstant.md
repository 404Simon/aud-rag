---
title: Hash-Funktion Variante 1 – Konstante Funktion
description: Erläuterung einer einfachen, aber ineffizienten konstanten Hash-Funktion, die zu massiven Kollisionen führt.
tags:
    - Hashing
    - Hash-Funktion
    - Algorithmus
    - Beispiel
---

# Hash-Funktion: Variante 1 – Konstante Funktion

**Beschreibung:**
Diese Funktion gibt für jeden Schlüssel den gleichen Wert zurück. Das bedeutet, alle Elemente landen an derselben Stelle und es entstehen maximal viele Kollisionen.

**Implementierung:**
```c
int hash_1(String s) {
    return 3;
}
```

**Ergebnis:**
- Alle Elemente werden an Position 3 abgelegt.
- Beispielhafte Bewertung: 105 Suchschritte, da im Grunde eine Liste entsteht.

