---
title: Kreuzparität
description: Erklärt das Konzept der Kreuzparität, bei dem sowohl Zeilen- als auch Spaltenparität zur Fehlererkennung und -korrektur genutzt wird.
tags:
    - Kreuzparität
    - Fehlererkennung
    - Fehlerkorrektur
    - Codierung
---

# Kreuzparität

Die **Kreuzparität** nutzt zusätzlich zu den einzelnen Paritätsbits eine **Prüfzeile** und ein **Prüfspaltenwort**:
1. **Innerhalb einzelner Codewörter:** Jedes Wort erhält ein Paritätsbit.
2. **Prüfzeile:** Paritätsbits aller Wörter eines Blocks werden zu einer Zeile zusammengefasst (LRC – Longitudinal Redundancy Check).
3. **Prüfspalte:** Aus den Paritätsbits der Zeilen wird eine Spalte (VRC – Vertical Redundancy Check) gebildet.
4. **Zusätzliches Prüfbit (P):** Ergänzt den Block, sodass insgesamt eine gerade Anzahl an Einsen entsteht.

*Fehlerkorrektur:*  
- Ist genau ein Bit fehlerhaft, zeigt der Vergleich von Prüfzeile und Prüfspalte die Position des Fehlers an – dieser kann dann invertiert werden.

