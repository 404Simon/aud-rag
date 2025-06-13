---
title: Schlange/Queue
description: Die Queue (Warteschlange) arbeitet nach dem FIFO-Prinzip; Das zuerst gespeicherte Element wird zuerst entfernt.
tags:
    - Queue
    - FIFO
    - Datenstruktur
---

# Schlange/Queue

```
Enqueue(7) → [7]
Enqueue(3) → [7, 3]
Enqueue(8) → [7, 3, 8]
Dequeue() → [3, 8] (7 wurde entfernt)
```
Operationen:
- `add(T t)`: Element am Ende der Queue hinzufügen.
- `take()`: Erstes Element entfernen.
- `head()`: Erstes Element zurückgeben.
- `isEmpty()`: Wahr, wenn Schlange leer, sonst falsch.

