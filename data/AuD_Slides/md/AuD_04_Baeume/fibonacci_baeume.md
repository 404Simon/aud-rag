---
title: Fibonacci-Bäume in der Baumanalyse
description: Entdecke Fibonacci-Bäume – eine spezielle Baumklasse, die in der Analyse von Baumhöhen und Worst-Case-Szenarien verwendet wird.
tags:
    - Fibonacci-Baum
    - Baum
    - Algorithmus
    - Analyse
---

# Fibonacci-Bäume in der Baumanalyse

**Fibonacci-Bäume** sind eine Unterklasse von Bäumen, die rekursiv definiert werden:

**Aufbau:**
- **Höhe 0:** Ein leerer Baum.
- **Höhe 1:** Ein einzelner Knoten.
- **Höhe h:** Ein Baum mit einer neuen Wurzel, dessen linker Unterbaum ein Fibonacci-Baum der Höhe \( h-1 \) und rechter Unterbaum ein Fibonacci-Baum der Höhe \( h-2 \) ist.

Diese Bäume dienen dazu, **obere Schranken** für die Höhe von (nicht perfekt) balancierten Bäumen abzuschätzen.

