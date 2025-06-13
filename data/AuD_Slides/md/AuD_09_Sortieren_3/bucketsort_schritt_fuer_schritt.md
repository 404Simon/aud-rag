---
title: Bucketsort – Schritt-für-Schritt Lösung  
description: Schrittweise Anwendung des Bucketsort-Verfahrens zur Sortierung von Briefen (Postleitzahlen) anhand von Buckets.  
tags:
    - Bucketsort
    - Streuen und Sammeln
    - Schritt-für-Schritt
    - Sortieren
    - Algorithmus
---

# Bucketsort – Schritt-für-Schritt Lösung

**Aufgabenstellung:**  
Sortiere die folgenden Postleitzahlen mittels Bucketsort:  
```
55777, 70543, 71083, 54222, 70666, 71083, 71245, 71888, 71248, 71222, 55777, 55779, 70662, 71083, 71248
```

**Schritt 1: Bestimme den Schlüssel für die Buckets**  
Nehmen wir an, wir sortieren anhand der ersten Ziffer (Postleitzahlen beginnen entweder mit 5 oder 7).  
- **Bucket 5:** Zahlen, die mit „5“ beginnen  
- **Bucket 7:** Zahlen, die mit „7“ beginnen

**Schritt 2: Streuphase – Zuweisung in Buckets**  
Gehe jede Postleitzahl durch und ordne sie dem passenden Bucket zu:  

- **Bucket 5:**  
  - 55777, 54222, 55777, 55779  
- **Bucket 7:**  
  - 70543, 71083, 70666, 71083, 71245, 71888, 71248, 71222, 71083, 71248, 70662

**Schritt 3: Interne Sortierung innerhalb der Buckets**  
Sortiere die Inhalte der einzelnen Buckets (z. B. mit einem einfachen Sortieralgorithmus wie Insertion Sort):

- **Bucket 5 sortiert:**  
  - [54222, 55777, 55777, 55779]
- **Bucket 7 sortiert:**  
  - [70543, 70662, 70666, 71083, 71083, 71083, 71222, 71245, 71248, 71248, 71888]

**Schritt 4: Sammelphase – Zusammenführen der Buckets**  
Füge die sortierten Buckets in aufsteigender Reihenfolge zusammen (erst Bucket 5, dann Bucket 7):

**Endgültiges sortiertes Array:**  
```
[54222, 55777, 55777, 55779, 70543, 70662, 70666, 71083, 71083, 71083, 71222, 71245, 71248, 71248, 71888]
```

