---
title: Hash-Funktion Variante 3 – Erstes Zeichen modulo H_SIZE
description: Erklärung der Hash-Funktion, die den ASCII-Wert des ersten Zeichens modulo der Tabellengröße verwendet.
tags:
    - Hashing
    - Hash-Funktion
    - Algorithmus
    - Beispiel
---

# Hash-Funktion: Variante 3 – Erstes Zeichen modulo H_SIZE

**Beschreibung:**
Diese Methode nutzt den ASCII-Wert des ersten Zeichens eines Strings und berechnet den Hash-Wert durch den Modulo-Operator mit der Hash-Tabelle-Größe.

**Implementierung:**
```c
int hash_3(String s) {
    return s.charAt(0) % H_SIZE;
}
```

**Ergebnis:**
- Bessere Verteilung als die vorherigen Varianten, auch wenn manche Listen leer bleiben.
- Bewertung: Etwa 45 Suchschritte.

