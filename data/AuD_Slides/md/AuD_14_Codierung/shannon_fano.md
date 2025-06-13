---
title: Shannon-Fano Algorithmus
description: Schrittweise Anleitung zum Shannon-Fano Algorithmus zur optimalen Codierung basierend auf Zeichenhäufigkeiten.
tags:
    - Shannon-Fano
    - Algorithmus
    - Codierung
    - Schritt-für-Schritt
---

# Shannon-Fano Algorithmus

**Vorgehen:**
1. **Sortieren:** Ordne die Zeichen nach abnehmender Häufigkeit.
2. **Teilen:** Unterteile die Liste in zwei Gruppen, sodass die Summe der Wahrscheinlichkeiten möglichst gleich ist.
3. **Codezuweisung:**  
   - Erweitere den Code der einen Gruppe um „0“ und der anderen um „1“.
4. **Rekursion:**  
   - Falls eine Gruppe mehr als ein Zeichen enthält, wiederhole den Vorgang.

*Anwendungsbeispiel:*  
Für die Zeichenmenge {E (42), N (20), A (16), B (8), H (8), T (6)}:
- Erste Unterteilung: {E} und {N, A, B, H, T}.
- Weiter unterteilen, bis jedem Zeichen ein eindeutiger Binärcode zugewiesen ist.

