---
title: Fehlererkennung und -korrektur
description: Erklärt, wie die Hamming-Distanz zur Erkennung und Korrektur von Bitfehlern in Codewörtern verwendet wird.
tags:
    - Fehlerkorrektur
    - Hamming-Distanz
    - Codierung
    - Bitfehler
---

# Fehlererkennung und -korrektur

Die Fähigkeit eines Codes, Fehler zu erkennen oder zu korrigieren, hängt von seiner Hamming-Distanz \(h\) ab:
- **\(h = 1\):** Keine Fehlererkennung, da ein einzelner Fehler ein gültiges Codewort ergeben könnte.
- **\(h = 2\):** Kann 1-Bit-Fehler erkennen, aber nicht korrigieren.
- **\(h = 3\) oder \(h = 4\):** Ermöglicht die Korrektur eines 1-Bit-Fehlers und/oder die Erkennung von 2-Bit-Fehlern.
- **Höhere h-Werte:** Erlauben die Erkennung bzw. Korrektur von mehr Bitfehlern.

*Schritt-für-Schritt Beispiel:*  
Wenn bei einem Code mit \(h = 3\) ein Fehler auftritt, so unterscheidet sich das empfangene Wort in genau einer Stelle vom gesendeten, was durch Vergleich mit allen gültigen Codewörtern korrigiert werden kann.

