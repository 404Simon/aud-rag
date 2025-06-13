---
title: Externes Sortieren Vertikales Zerlegen  
description: Trennung von Schlüsseln und Restdaten zur effizienten Sortierung großer Datenmengen.  
tags:
    - Externes Sortieren
    - vertikales Zerlegen
    - Schlüssel
    - Datenstruktur
---

# Externes Sortieren: Vertikales Zerlegen

**Vorgehensweise:**  
1. **Zerlegung:**  
   Trenne jeden Datensatz in zwei Teile:  
   - **Schlüssel:** Das Kriterium, nach dem sortiert wird.  
   - **Restdaten:** Die verbleibenden Informationen, die dem Schlüssel zugeordnet sind.

2. **Sortierung:**  
   Sortiere die Schlüssel mit einem effizienten internen Sortierverfahren.

3. **Rekombination:**  
   Füge nach der Sortierung die Restdaten wieder zu den entsprechenden Schlüsseln zusammen.

**ASCII-Skizze:**  
```
Datensatz: [Schlüssel | Restdaten]
        ↓ Zerlegen
Schlüssel: [S1, S2, S3, ...]
Restdaten: [R1, R2, R3, ...]

Sortiere Schlüssel → [S2, S1, S3, ...]
Verbinde zu:
[S2|R2], [S1|R1], [S3|R3], ...
```

