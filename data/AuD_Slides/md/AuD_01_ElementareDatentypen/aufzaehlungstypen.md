---
title: Aufzählungstypen/Enums
description: Aufzählungstypen (Enums) ermöglichen die Definition einer festgelegten Menge von Werten, z. B. für Zustände oder Kategorien.
tags:
    - Enums
    - Aufzählung
    - Typsicherheit
    - Java
---

# Aufzählungstypen/Enums

Eine Aufzählung ist ein Datentyp mit einem endlichen Wertebereich.

Beispiel in Java:
```java
enum Ampelfarbe {GRUEN, ROT, GELB}
```

## Vorteile

- **Typsicherheit**: Nur vordefinierte Werte sind erlaubt.
- **Bessere Lesbarkeit**: Anstelle von Zahlen oder Strings werden sprechende Namen genutzt.
- **Fehlerminimierung**: Falsche Werte können nicht zufällig eingegeben werden.
```
