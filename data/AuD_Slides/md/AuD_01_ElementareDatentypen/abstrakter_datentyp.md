---
title: Abstrakter Datentyp (ADT)
description: ADT (Abstrakte Datentypen) definieren Datenstrukturen anhand ihrer Operationen, ohne die interne Implementierung zu spezifizieren.
tags:
    - ADT
    - Abstraktion
    - Datenstruktur
    - Kapselung
---

# Abstrakter Datentyp (ADT)

Ein ADT beschreibt nur, **was** eine Datenstruktur tut, nicht **wie** sie intern funktioniert.

## Beispiel ADT Stack:

- `push(T t)`: Legt ein Element oben auf den Stack.
- `pop()`: Entfernt das oberste Element.
- `isEmpty()`: Prüft, ob der Stack leer ist.

## Vorteile:

- **Kapselung**: Anwender kennt nur die Schnittstelle, nicht die Implementierung
- **Präzise Beschreibung**: Schnittstelle zwischen Anwendung und Implementierung eindeutig
- **Flexibilität**: Verschiedene Implementierungen möglich
- **Modularität**: Leichter Austausch einzelner Komponenten
- **Integrität**: Anwender kann innere Struktur nicht manipulieren

