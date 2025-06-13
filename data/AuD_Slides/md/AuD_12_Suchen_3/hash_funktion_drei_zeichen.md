---
title: Hash-Funktion Variante 4 – Drei Zeichen berücksichtigen
description: Detaillierte Erklärung einer Hash-Funktion, die drei Zeichen des Strings kombiniert, um den Hash-Wert zu berechnen.
tags:
    - Hashing
    - Hash-Funktion
    - Algorithmus
    - Beispiel
---

# Hash-Funktion: Variante 4 – Drei Zeichen berücksichtigen

**Vorgehensweise:**
Die Funktion nutzt:
1. Das erste Zeichen modulo 3.
2. Das mittlere Zeichen modulo 5.
3. Das letzte Zeichen modulo 7.

Anschließend wird die Summe dieser Werte modulo der Tabellengröße berechnet.

**Implementierung:**
```c
int hash_4(String s) {
    int first = s.charAt(0) % 3;
    int middle = s.charAt(s.size()/2) % 5;
    int last = s.charAt(s.size()-1) % 7;
    return (first + middle + last) % H_SIZE;
}
```

**Ergebnis:**
- Gute Verteilung mit rund 24 Suchschritten.

