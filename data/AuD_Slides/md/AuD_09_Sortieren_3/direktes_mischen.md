---
title: Direktes Mischen (Direct Merging)  
description: Zwei-Phasen-Mischen, bei dem sortierte Läufe abwechselnd auf Hilfsdateien verteilt und zusammengeführt werden.  
tags:
    - Direktes Mischen
    - Mischen
    - externer Merge
    - Algorithmus
---

# Direktes Mischen (Direct Merging)

**Grundprinzip:**  
Beim direkten Mischen wechselt der Algorithmus regelmäßig zwischen zwei Phasen:  
- **Trennphase:**  
  Verteilt die vorhandenen sortierten Läufe auf zwei Hilfsdateien.  
- **Mischphase:**  
  Führt jeweils die kleineren Elemente aus den beiden Hilfsdateien zusammen und schreibt sie in eine Zieldatei.

**Wichtiges Detail:**  
- Mit jedem vollständigen Durchlauf verdoppelt sich die Länge der sortierten Läufe.  
- Nach maximal log₂(n)+1 Durchgängen ist die gesamte Sequenz sortiert.

**Schritt-für-Schritt Beispiel (vereinfacht):**  
1. Originaldatei: [7, 13, 9, 4, 25, 1, 30, 12]  
2. Trennen in zwei Hilfsdateien (z. B. [7, 9, 25, 30] und [13, 4, 1, 12])  
3. Mischen zu einer neuen, teilweise sortierten Datei.

