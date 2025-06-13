---
title: Berechnung der Ordnung eines B‑Baums
description: Zeigt Schritt für Schritt, wie die Ordnung eines B‑Baums berechnet wird, illustriert durch eine ASCII-Formel.
tags:
    - B‑Bäume
    - Berechnung
    - Ordnung
    - Algorithmus
---

# Berechnung der Ordnung eines B‑Baums

Um die **Ordnung** eines B‑Baums zu bestimmen, werden folgende Parameter berücksichtigt:

- **Blockgröße (b):**  
  Größe des Speicherblocks (z. B. 4 kB).

- **Zeigergröße (z):**  
  Speicherbedarf eines Zeigers.

- **Schlüsselgröße (s):**  
  Speicherbedarf eines Schlüsselwertes.

- **Dateninhalt (d):**  
  Platzbedarf für den restlichen Datensatz.

Die Anzahl der Einträge pro Knoten wird berechnet mit:
```
Anzahl Einträge = ⌊(b + z) / (z + s + d)⌋
```
_Das Ergebnis wird abgerundet (Floor-Funktion)._  

**Beispiel:**  
Aus praktischen Werten ergibt sich im Beispiel ein B‑Baum der Ordnung 8.

