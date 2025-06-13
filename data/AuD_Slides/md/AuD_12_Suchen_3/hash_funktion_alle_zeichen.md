---
title: Hash-Funktion Variante 5 – Alle Zeichen berücksichtigen
description: Erklärung der optimalen Hash-Funktion, die alle Zeichen eines Strings einbezieht, um nahezu perfekte Verteilung zu erreichen.
tags:
    - Hashing
    - Hash-Funktion
    - Algorithmus
    - Beispiel
---

# Hash-Funktion: Variante 5 – Alle Zeichen berücksichtigen

**Vorgehensweise:**
Hier wird der Hash-Wert gebildet, indem über alle Zeichen iteriert wird. Dabei wird jedem Zeichen ein modifizierter Wert zugeordnet (unter Einbeziehung seines Index) und aufsummiert. Der finale Wert wird dann modulo H_SIZE genommen.

**Implementierung:**
```c
int hash_5(String s) {
    int i = 0;
    for (int j = 0; j < s.size(); j++) {
        i += s[j] % 32 + j;
    }
    return i % H_SIZE;
}
```

**Ergebnis:**
- Nahezu optimale Verteilung mit nur ca. 19 Suchschritten.

