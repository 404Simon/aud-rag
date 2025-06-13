---
title: Mischverfahren – Schritt-für-Schritt Lösung  
description: Detaillierte Lösung zur Sortierung eines Zahlenfelds mittels direktem, natürlichem und Mehr-Wege-Mischen, inkl. Zwischenschritten.  
tags:
    - Mischverfahren
    - Direktes Mischen
    - Natürliches Mischen
    - Mehr-Wege-Mischen
    - Sortieren
    - Algorithmus
---

# Mischverfahren – Schritt-für-Schritt Lösung

Wir betrachten als Beispiel das Zahlenfeld:  
```
[7, 13, 9, 4, 25, 1, 30, 12]
```

## 1. Direktes Mischen (Two-Phase-Merging)

**Schritt 1: Trennen**  
Teile das ursprüngliche Array in zwei Hilfsdateien, z. B. abwechselnd oder durch Aufteilung in zwei Hälften:  
- **Hilfsdatei 1:** Elemente an ungeraden Positionen: 7, 9, 25, 30  
- **Hilfsdatei 2:** Elemente an geraden Positionen: 13, 4, 1, 12  

**Schritt 2: Mischen**  
Vergleiche das jeweils erste Element beider Hilfsdateien und wähle das kleinere aus:  
- Vergleiche 7 (HD1) und 13 (HD2) → 7 ist kleiner.  
- Nächstes: Vergleiche 9 (HD1) und 13 (HD2) → 9 ist kleiner.  
- Vergleiche 25 (HD1) und 13 (HD2) → 13 ist kleiner.  
- Vergleiche 25 (HD1) und 4 (HD2) → 4 ist kleiner.  
- Vergleiche 25 (HD1) und 1 (HD2) → 1 ist kleiner.  
- Vergleiche 25 (HD1) und 12 (HD2) → 12 ist kleiner.  
- Die restlichen Elemente (25, 30) aus HD1 werden angehängt.  

**Ergebnis (Nach einem Durchgang):**  
```
[7, 9, 13, 4, 1, 12, 25, 30]
```

*Hinweis:* Mit jedem Misch-Durchlauf verdoppelt sich typischerweise die Länge der zusammengeführten Läufe. Bei mehreren Durchgängen ist nach maximal ⌈log₂(n)⌉+1 Durchläufen das gesamte Array sortiert.

---

## 2. Natürliches Mischen

**Schritt 1: Erkennen natürlicher Läufe**  
Scanne das Array und identifiziere bereits sortierte Teilsequenzen (Läufe).  
Beispiel:  
- Angenommen, in unserem Feld erkennt man den Lauf: [7, 13] und [9] (da 9 < 13, bricht der erste Lauf ab)  
- Dann folgt ein weiterer Lauf, z. B. [4, 25] und ein einzelner [1, 30, 12] – hier müssten wir die Grenzen genau bestimmen, sodass jeweils die maximal sortierten Sequenzen zusammengeführt werden.

**Schritt 2: Mischen der natürlichen Läufe**  
Mische die erkannten Läufe (z. B. [7, 13] und [9]) zu einer längeren, sortierten Sequenz.  
- Vergleiche das erste Element von [7, 13] mit [9] → 7 ist kleiner.  
- Dann 9, danach 13.  
Wiederhole diesen Prozess für alle erkannten Läufe.

**Vorteil:**  
Wenn natürliche, längere Läufe existieren, muss weniger gemischt werden – dadurch wird Laufzeit gespart.

---

## 3. Mehr-Wege-Mischen

**Schritt 1: Vorbereitendes Trennen**  
Statt zwei Hilfsdateien werden hier mehrere (z. B. drei) verwendet.  
- Verteile die sortierten Läufe aus dem Ausgangsarray auf die drei Hilfsdateien.

**Schritt 2: Simultanes Mischen**  
- Mische simultan die ersten Läufe aus zwei Dateien in eine dritte Datei.  
- Danach mischst du wieder die Inhalte der Hilfsdateien abwechselnd, sodass am Ende nur noch ein einziger sortierter Lauf übrigbleibt.

**Schritt 3: Wiederholung**  
- Wiederhole den Mischvorgang solange, bis alle Teilläufe zu einem vollständigen, sortierten Array zusammengeführt wurden.

**Fazit:**  
Mehr-Wege-Mischen minimiert die Anzahl der Durchgänge, erfordert aber eine präzise Steuerung der Verteilung und Zusammenführung der Läufe.

