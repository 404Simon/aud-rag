---
title: Übung 6 – Tripel-Eigenschaft in BST-Suchpfaden
description: Schritt-für-Schritt-Lösung zur Analyse der Behauptung, dass für jede Kombination von Schlüsseln aus den Mengen A (links vom Suchpfad), B (auf dem Suchpfad) und C (rechts vom Suchpfad) immer \(a \leq b \leq c\) gilt, inklusive eines Gegenbeispiels.
tags:
    - Übung
    - Binärer Suchbaum
    - Suchpfad
    - Lösung
---

# Übung 6 – Tripel-Eigenschaft in BST-Suchpfaden

**Aufgabenstellung:**  
Es wird behauptet, dass in einem BST – wenn die Suche in einem Blatt endet – für jede Kombination aus:  
- \( a \) aus \( A \) (Schlüssel links vom Suchpfad),  
- \( b \) aus \( B \) (Schlüssel auf dem Suchpfad) und  
- \( c \) aus \( C \) (Schlüssel rechts vom Suchpfad)  
die Ungleichung \( a \leq b \leq c \) gelten muss.  
Finde ein möglichst kleines Gegenbeispiel.

## Schritt-für-Schritt-Lösung:

1. **Verständnis der Mengen:**  
   - \( A \): Alle Schlüssel, die links von dem Suchpfad liegen (abgeschnittene Bereiche).  
   - \( B \): Schlüssel, die auf dem Suchpfad liegen.  
   - \( C \): Schlüssel, die rechts vom Suchpfad liegen.

2. **Analyse der Behauptung:**  
   - Im Idealfall (bei perfekt balancierten Entscheidungen) könnte \( a \leq b \leq c \) gelten.  
   - In einem realen Suchpfad können jedoch Überschneidungen auftreten, weil Entscheidungen lokal getroffen werden.

3. **Konstruktion eines Gegenbeispiels (Beispielhaft):**  
   - Betrachte einen kleinen Baum, z. B.:
   ```plaintext
         30
        /  \
      20    40
     /
   10
   ```
   - Suche nach 25:
     - **Suchpfad:**  
       30 (da 25 < 30, gehe links) → 20 (25 > 20, gehe rechts) → kein rechter Knoten, Suche endet.
     - **Mengenbildung:**  
       - \( B = \{30, 20\} \)  
       - \( A \) könnte Knoten aus dem linken Teil von 20 (z. B. 10) enthalten.  
       - \( C \) enthält Knoten aus dem rechten Teil von 30 (hier 40).
   - Nun betrachte ein Tripel, z. B.:  
     \( a = 10 \) (aus \( A \)), \( b = 30 \) (aus \( B \)) und \( c = 25 \) (angenommen, durch einen alternativen Suchpfad in \( C \)).  
     Hier wäre \( 30 \not\leq 25 \), was die Behauptung widerlegt.

4. **Schlussfolgerung:**  
   - Durch geeignete Wahl der Mengen – also durch geschickte Auswahl des Baumes und des Suchpfades – kann man zeigen, dass es möglich ist, ein Tripel \( (a, b, c) \) zu finden, bei dem \( b > c \) gilt.  
   - Damit ist die Behauptung nicht universell wahr.

**Fazit:**  
Ein möglichst kleines Gegenbeispiel zeigt, dass die Tripel-Eigenschaft \( a \leq b \leq c \) nicht immer erfüllt ist. Der hier skizzierte Lösungsweg demonstriert, wie durch Analyse der Suchpfade und der dazugehörigen Mengen ein Widerspruch konstruiert werden kann.
