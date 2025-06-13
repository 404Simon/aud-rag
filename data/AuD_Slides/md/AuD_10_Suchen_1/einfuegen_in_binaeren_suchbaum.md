---
title: Einfügen in binäre Suchbäume
description: Lerne, wie neue Knoten in einen binären Suchbaum eingefügt werden, um die BST-Eigenschaften zu erhalten.
tags:
    - Binärer Suchbaum
    - Einfügen
    - Algorithmus
    - Datenstruktur
---

# Einfügen in binäre Suchbäume

**Vorgehen:**
1. Beginne an der Wurzel.
2. Vergleiche den neuen Schlüssel mit dem aktuellen Knoten.
   - Ist er kleiner, gehe in den linken Unterbaum.
   - Ist er größer, gehe in den rechten Unterbaum.
3. Wiederhole dies, bis ein leerer Unterbaum erreicht ist.
4. Füge den neuen Knoten als Blatt ein.

**Beispiel (Einfügen von 67):**
```plaintext
Start:        57
Neuer Wert:   67
- 67 > 57 → gehe nach rechts
- Vergleiche mit 66 → 67 > 66 → gehe nach rechts
- Vergleiche mit 68 → 67 < 68 → gehe in den linken Teil des rechten Unterbaums
- Leerer Unterbaum gefunden → Füge 67 ein
```

