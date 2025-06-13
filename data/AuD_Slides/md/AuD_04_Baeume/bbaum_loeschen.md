---
title: Löschen in B‑Bäumen
description: Schrittweise Erklärung des Löschvorgangs in B‑Bäumen, ergänzt durch ASCII-Art zur Visualisierung von Unterläufen und Zusammenführungen.
tags:
    - B‑Bäume
    - Löschen
    - Algorithmus
    - Unterlauf
---

# Löschen in B‑Bäumen

Der Löschvorgang umfasst folgende Schritte:

1. **Element suchen:**  
   Finde den Knoten, der den zu löschenden Schlüssel enthält.

2. **Direktes Löschen im Blatt:**  
   Ist der Knoten ein Blatt, entferne den Schlüssel direkt.

3. **Löschen im inneren Knoten:**  
   Tausche den zu löschenden Schlüssel mit seinem Inorder-Nachfolger (kleinster Schlüssel im rechten Teilbaum) und lösche ihn dann im Blatt.

4. **Behandlung von Unterläufen:**  
   Tritt ein Unterlauf (weniger als _m_ Einträge) auf, so:
   - **Fall 1:** Leihe einen Schlüssel vom Nachbarknoten, falls dieser mehr als _m_ Einträge hat.
   - **Fall 2:** Führe Knoten zusammen, wenn beide benachbarten Knoten nur _m_ Einträge besitzen.

### Löschen aus einem Blatt (ohne Unterschreitung)

**Beispiel 3:**

Gegeben sei folgender B‑Baum (Ordnung m = 2):
```
B-Baum:
  Wurzel: [20, 40]
    Kind 1: [5, 10]
    Kind 2: [25, 30, 35]
    Kind 3: [45, 50, 55]
```

**Löschen des Schlüssels 30:**

1. **Schlüssel suchen:**  
   Da 30 zwischen 20 und 40 liegt, gelangt man in den zweiten Blattknoten [25, 30, 35].

2. **Löschen:**  
   Der Schlüssel 30 wird entfernt.  
   Neuer Blattknoten: [25, 35].

3. **Überprüfung:**  
   Prüfe, ob der Knoten noch mindestens m (hier 2) Schlüssel enthält. Da [25, 35] zwei Schlüssel hat, ist alles in Ordnung.

**Ergebnis:**
```
B-Baum:
  Wurzel: [20, 40]
    Kind 1: [5, 10]
    Kind 2: [25, 35]
    Kind 3: [45, 50, 55]
```

### Löschen aus einem Blatt mit Unterlauf – Schlüsseldiebstahl (Borrowing)

**Beispiel 4:**

Gegeben sei folgender B‑Baum (Ordnung m = 2):
```
B-Baum:
  Wurzel: [20, 40]
    Kind 1: [5, 10]
    Kind 2: [25, 30]       <-- Achtung: nur 2 Schlüssel (genau m), also kritischer Bereich!
    Kind 3: [45, 50, 55, 60]
```

**Löschen des Schlüssels 30 aus Kind 2:**

1. **Schlüssel suchen:**  
   Da 30 zwischen 20 und 40 liegt, befindet sich 30 in Kind 2.

2. **Löschen:**  
   Entfernt man 30, erhält man [25]. Nun enthält der Knoten nur 1 Schlüssel, was unter der Mindestanzahl m = 2 liegt.

3. **Ausgleichen durch Schlüsseldiebstahl:**  
   Prüfe die direkten Geschwister (Nachbarknoten).  
   * Kind 1 ([5, 10]) hat 2 Schlüssel – aber dabei muss man schauen, ob es einen Überschuss gibt. In diesem Beispiel ist Kind 1 exakt am Minimum, also nicht entleihbar.  
   * Kind 3 ([45, 50, 55, 60]) hat 4 Schlüssel (bei m=2 sind 4 das Maximum; es kann also ein Schlüssel gestohlen werden, ohne für Unterlauf zu sorgen).  

   Wir dürfen aus Kind 3 entleihen, dazu kann man den linken Schlüssel von Kind 3 (45) in den Elternknoten holen und gleichzeitig das Elternintervall an Kind 2 übertragen.  

   **Vorgehen:**  
   - Der Schlüssel 40 in der Wurzel wird durch 45 ersetzt.  
   - 45 wandert in den leeren Knoten (Kind 2), sodass dieser wieder zwei Schlüssel enthält.  
   - Kind 3 wird um den entliehenen Schlüssel reduziert (nun [50, 55, 60]).

4. **Ergebnis:**  
```
B-Baum:
  Wurzel: [20, 45]
    Kind 1: [5, 10]
    Kind 2: [25, 40] (den ursprünglichen Elternschlüssel 40 als Trennschlüssel mit aufgenommen)  
    Kind 3: [50, 55, 60]
```

**Hinweis:**  
Manchmal ist das Entleihen (Borrowing) nicht möglich, weil beide Geschwisterknoten gerade am Minimum sind. In diesem Fall muss man fusionieren.

### Löschen aus einem Blatt mit Unterlauf – Fusion (Merging)

**Beispiel 5:**

Gegeben sei folgender B‑Baum (Ordnung m = 2):
```
B-Baum:
  Wurzel: [20, 40]
    Kind 1: [5, 10]    <-- enthält ebenfalls genau 2 Schlüssel
    Kind 2: [25, 30]   <-- enthält genau 2 Schlüssel, also keine Reserve
    Kind 3: [45, 50]   <-- enthält ebenfalls genau 2 Schlüssel
```

**Löschen des Schlüssels 30 aus Kind 2:**

1. **Schlüssel suchen:**  
   Wie im vorherigen Beispiel gelangt man in den zweiten Knoten [25, 30].

2. **Löschen:**  
   Entfernt man 30, erhält man [25].  
   Nun enthält Kind 2 nur 1 Schlüssel (unter m = 2).

3. **Fusion mit Nachbarknoten:**  
   Prüfe die Geschwister:  
   - Angenommen, weder Kind 1 noch Kind 3 hat einen Überschuss (beide haben exakt 2 Schlüssel).  
   - Dann fusioniert man Kind 2 mit einem Geschwister und zieht den entsprechenden Trennschlüssel aus der Wurzel ein.  
     
     Beispiel: Fusion mit dem rechten Geschwister (Kind 3):  
     - Ziehe den Trennschlüssel 40 aus der Wurzel in den fusionierten Knoten.  
     - Fusioniere [25] und [45, 50] zu einem neuen Knoten: [25, 40, 45, 50].  
     - Die Wurzel wird dann zu [20] (weil 40 entfernt wurde).

4. **Ergebnis:**
```
B-Baum:
  Wurzel: [20]
    Kind 1: [5, 10]
    Kind 2: [25, 40, 45, 50]
```

### Löschen eines Schlüssels aus einem internen Knoten

**Beispiel 6:**

Gegeben sei folgender B‑Baum (Ordnung m = 2):
```
B-Baum:
  Wurzel: [20, 40]
    Kind 1: [5, 10, 15]
    Kind 2: [25, 30, 35]
    Kind 3: [45, 50, 55]
```

**Löschen des Schlüssels 40 (ein interner Schlüssel):**

1. **Schlüssel lokalisieren:**  
   Schlüssel 40 befindet sich in der Wurzel, also in einem internen Knoten.

2. **Ersetzen durch Nachfolger/ Vorgänger:**  
   Um die Ordnung zu erhalten, sucht man den Inorder-Nachfolger (den kleinsten Schlüssel im rechten Teilbaum) oder den Inorder-Vorgänger (den größten Schlüssel im linken Teilbaum).  
     
   Beispiel:  
   - Suche im rechten Kind (Kind 3: [45, 50, 55]).  
   - Der kleinste Schlüssel dort ist 45.
     
   Ersetze 40 in der Wurzel durch 45.

3. **Löschen des Ersatzschlüssels im Blatt:**  
   Entferne 45 aus Kind 3.  
   Neuer Knoten in Kind 3: [50, 55].

4. **Ergebnis:**
```
B-Baum:
  Wurzel: [20, 45]
    Kind 1: [5, 10, 15]
    Kind 2: [25, 30, 35]
    Kind 3: [50, 55]
```

