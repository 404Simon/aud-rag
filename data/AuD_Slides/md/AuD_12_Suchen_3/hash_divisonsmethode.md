---
title: Divisionsmethode
description: Erklärung der Divisionsmethode, bei der der Hash-Wert als Rest einer Division durch die Tabellengröße berechnet wird.
tags:
    - Hashing
    - Divisionsmethode
    - Hash-Funktion
    - Algorithmus
---

# Divisionsmethode

**Prinzip:**  
Der Hash-Wert wird als der Rest der Division des Schlüssels durch die Tabellengröße berechnet.

**Schritte:**
1. Wähle eine Tabellengröße (am besten eine Primzahl).
2. Berechne `hash = key mod TableSize`.

**Beispiel:**  
Für den Schlüssel 55456 und eine Tabelle der Größe 101 könnte der Hash-Wert so berechnet werden:  
```
55456 mod 101 = ? 
```
(Dieser Restwert wird als Index verwendet.)

