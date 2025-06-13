---
title: Einfügen in B‑Bäumen
description: Detaillierte Anleitung zum Einfügen eines Elements in einen B‑Baum, mit ASCII-Art zur Darstellung des Knotenüberlaufs.
tags:
    - B‑Bäume
    - Einfügen
    - Algorithmus
    - Überlauf
---

# Einfügen in B‑Bäumen

Das Einfügen erfolgt in folgenden Schritten:

1. **Blatt suchen:**  
   Finde den Blattknoten, in den das neue Element eingefügt werden soll.

2. **Einfügen ohne Überlauf:**  
   Falls der Knoten weniger als `2m` Einträge enthält, wird das Element direkt eingefügt.

3. **Knotenüberlauf und Aufspaltung:**  
   Ist der Knoten voll, wird er in zwei Knoten aufgeteilt.  
   - Die ersten _m_ Einträge bleiben im Originalknoten.
   - Die letzten _m_ Einträge gehen in einen neuen Knoten.
   - Der mittlere Schlüssel wird in den Elternknoten übernommen.

### Einfaches Einfügen ohne Aufteilung

**Beispiel 1:**

Gegeben sei folgender B‑Baum (Ordnung m = 2):
```
B-Baum:
  Wurzel: [20]
    Kind 1: [5, 10]
    Kind 2: [30, 35]
```

**Einfügen von 12:**

1. **Blatt finden:**  
   Da 12 < 20, gelangt man in den linken Blattknoten [5, 10].

2. **Einfügen:**  
   Der Knoten [5, 10] hat aktuell 2 Schlüssel, was unter der maximalen Anzahl (2m = 4) liegt. Also fügt man 12 sortiert ein:  
   Neuer Knoten: [5, 10, 12].

**Ergebnis:**
```
B-Baum:
  Wurzel: [20]
    Kind 1: [5, 10, 12]
    Kind 2: [30, 35]
```

### Einfügen mit Aufteilung (Splitting)

**Beispiel 2:**

Gegeben sei folgender B‑Baum (Ordnung m = 2):
```
B-Baum:
  Wurzel: [20, 40]
    Kind 1: [5, 10, 15, 18]
    Kind 2: [25, 30, 35]
    Kind 3: [45, 50, 55]
```
Hinweis: In diesem Blattknoten [5, 10, 15, 18] sind bereits 4 Schlüssel (Maximalzahl = 4).

**Einfügen von 12:**

1. **Blatt finden:**  
   Da 12 < 20, gelangt man in den linken Blattknoten [5, 10, 15, 18].

2. **Einfügen und Überlauf:**  
   Wird 12 in diesen Knoten eingefügt, erhielte man [5, 10, 12, 15, 18] mit 5 Schlüsseln, was den Maximalwert (4) überschreitet.

3. **Aufteilung (Split):**  
   - Zunächst sortiert man: [5, 10, 12, 15, 18].  
   - Der mittlere Schlüssel (hier 12) wird **aufsteigend** in den Elternknoten verschoben.  
   - Es entstehen zwei neue Knoten:  
     * Linker Knoten: [5, 10]  
     * Rechter Knoten: [15, 18]

4. **Anpassen der Elternstruktur:**  
   Der Schlüssel 12 wird in den Elternknoten eingefügt. Die Wurzel [20, 40] wird dadurch zu:
   ```
   Wurzel: [12, 20, 40]
   ```
   Dabei müssen auch die Kinder neu verteilt werden:  
   - Kind 1: [5, 10]  
   - Kind 2: [15, 18]  
   - Die übrigen Kinder bleiben unverändert (die bisherigen Kind 2 und Kind 3).

**Ergebnis:**
```
B-Baum:
  Wurzel: [12, 20, 40]
    Kind 1: [5, 10]
    Kind 2: [15, 18]
    Kind 3: [25, 30, 35]
    Kind 4: [45, 50, 55]
```

