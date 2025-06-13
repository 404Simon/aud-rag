---
title: Vorrangwarteschlange
description: Eine Priority Queue sortiert Elemente nach Priorität, nicht nach Einfügereihenfolge.
tags:
    - Priority Queue
    - Heap
    - Datenstruktur
    - Algorithmus
---

# Vorrangwarteschlange

Elemente haben eine Priorität. Das Element mit höchster Priorität wird zuerst verarbeitet.

```
add(7,2) → [7(2)]
add(3,1) → [3(1), 7(2)]
add(8,5) → [3(1), 7(2), 8(5)]
takeMin() -> [7(2), 8(5)]
```
Operationen:
- `add(T t, int priority)`: Element mit Priorität einfügen.
- `takeMin()`: Element mit höchster Priorität entfernen.
- `decreaseKey(T t)`: Priorität eines Elements verringern.

Felder oder verkettete Listen sind zur Implementierung unhandlich, daher Nutzung von Baumstrukturen (Heaps, AVL-Bäume).

