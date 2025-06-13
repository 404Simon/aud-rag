---
title: Unicode und UTF-Formate
description: Erklärt das Konzept von Unicode und die Unterschiede zwischen UTF-8, UTF-16 und UTF-32 hinsichtlich Speicherbedarf und Effizienz.
tags:
    - Unicode
    - UTF-8
    - UTF-16
    - UTF-32
    - Codierung
---

# Unicode und UTF-Formate

**Unicode** zielt darauf ab, alle Zeichen aller Sprachen in einem einheitlichen Zeichensatz zu vereinen:
- **Erweiterung:** Von 8 auf bis zu 32 Bit (über 4 Milliarden Zeichen).
- **Kompatibilität:**  
  - ASCII-Zeichen liegen im Bereich U+0000 bis U+007F.
- **UTF-Formate:**  
  - **UTF-32:** Immer 32 Bit, sehr speicherintensiv.  
  - **UTF-16:** Meist 2 Byte pro Zeichen, 4 Byte für seltene Zeichen.  
  - **UTF-8:** Variable Länge (1 bis 4 Byte), effizient für lateinische Zeichen.

