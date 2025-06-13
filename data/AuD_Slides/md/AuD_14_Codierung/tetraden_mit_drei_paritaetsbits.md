---
title: Tetraden mit drei Paritätsbits
description: Detaillierte Erklärung, wie durch Hinzufügen von drei Paritätsbits zu einem 7-Bit-Code (Tetrade) Fehler erkannt und 1-Bit-Fehler korrigiert werden können.
tags:
    - Tetraden
    - Paritätsbits
    - Fehlerkorrektur
    - Codierung
---

# Tetraden mit drei Paritätsbits

Bei **Tetraden mit drei Paritätsbits** wird jedem Codewort zusätzlich eine Reihe von Paritätsbits zugeordnet:
- **Codeaufbau:**  
  Ein Codewort besteht aus 4 Informationsbits und 3 Prüfbits, insgesamt 7 Bit.
- **Bildung der Prüfbits:**  
  - \(b_2\): Setze 1, wenn die Anzahl der Einsen in bestimmten Bitpositionen (z. B. \(b_6, b_5, b_4\)) gerade ist.
  - \(b_1\) und \(b_0\) analog für andere Kombinationen.
- **Fehlererkennung/Korrektur:**  
  Mit 3 Paritätsbits lassen sich 1-Bit-Fehler erkennen und korrigieren, da aus dem Muster der verletzten Paritätsbits eindeutig die fehlerhafte Stelle ermittelt wird.

*ASCII-Darstellung (vereinfacht):*

```
Informationsbits:  [ b6 b5 b4 b3 ]
Prüfbits:         [ b2 b1 b0 ]
Gesamtcode:        b6 b5 b4 b3 b2 b1 b0
```

