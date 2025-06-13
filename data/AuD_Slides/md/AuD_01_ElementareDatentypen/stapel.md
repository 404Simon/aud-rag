---
title: Stapel/Stacks
description: Der Stack (Stapelspeicher) arbeitet nach dem LIFO-Prinzip; Das zuletzt gespeicherte Element wird zuerst entfernt.
tags:
    - Stack
    - LIFO
    - Datenstruktur
---

# Stapel/Stacks

Ein Stapel speichert Elemente nach dem Prinzip:
```
Push(7) → [7]
Push(3) → [7, 3]
Push(8) → [7, 3, 8]
Pop() → [7, 3] (8 wurde entfernt)
```
Operationen:
- `push(T t)`: Element oben auf den Stack legen.
- `pop()`: Oberstes Element entfernen.
- `top()`: Oberstes Element zurückgeben.
- `isEmpty()`: Wahr, wenn Stapel leer, sonst falsch.

