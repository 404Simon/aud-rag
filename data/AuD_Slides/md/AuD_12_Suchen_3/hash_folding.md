---
title: Folding Methode
description: Schrittweise Erklärung der Folding Methode, bei der ein Schlüssel in Gruppen zerlegt und addiert wird, um den Hash-Wert zu ermitteln.
tags:
    - Hashing
    - Folding
    - Hash-Funktion
    - Algorithmus
---

# Folding Methode

**Prinzip:**  
Zerlege den Schlüssel in gleich große Gruppen und addiere diese, wobei letzte Überträge ignoriert werden.

**Schritte:**
1. Teile den Schlüssel in Gruppen gleicher Länge (z. B. 3-stellige Gruppen).
2. Addiere alle Gruppen.
3. Verwende den Summenwert (ggf. modulo der Tabellengröße) als Hash-Wert.

**Beispiel:**  
Für den Schlüssel `53746312526`:
- Teile in: `537`, `463`, `125`, `26`
- Summe: `537 + 463 + 125 + 26 = 1151`
- Hash-Wert: `1151 mod TableSize` (z. B. 151 bei einer Kapazität von 1000).

