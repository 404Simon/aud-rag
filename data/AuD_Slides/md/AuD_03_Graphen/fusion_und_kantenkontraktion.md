---
title: Fusion und Kantenkontraktion
description: Verfahren zur Zusammenführung von Knoten durch Fusion und Kantenkontraktion in Graphen.
tags:
    - Graph
    - Fusion
    - Kontraktion
---

# Fusion und Kantenkontraktion

**Fusion:**  
- Verschmilzt zwei Knoten \( u \) und \( v \) zu einem neuen Knoten \( uv \).
- Alle Kanten, die ursprünglich zu \( u \) oder \( v \) führten, werden auf \( uv \) übertragen.
- Mehrfache Kanten zu \( uv \) werden entfernt.

**Kantenkontraktion:**  
- Notation: \( G/e \)
- Entfernt eine Kante \( e = \{u, v\} \) und fusioniert anschließend die Endknoten \( u \) und \( v \).

