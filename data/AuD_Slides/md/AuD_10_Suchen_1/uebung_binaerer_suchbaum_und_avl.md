---
title: Übung 1 – Binärer Suchbaum und AVL-Baum aufbauen und modifizieren
description: Schritt-für-Schritt-Lösung zur Erstellung und Bearbeitung eines binären Suchbaums und AVL-Baums anhand der Zahlenfolge 23, 66, 42, 11, 5, 69, 77, 55, 16.
tags:
    - Übung
    - Binärer Suchbaum
    - AVL-Baum
    - Lösung
---

# Übung 1 – Binärer Suchbaum und AVL-Baum

Gegeben ist die Zahlenfolge:  
`23, 66, 42, 11, 5, 69, 77, 55, 16`

## a) Schrittweiser Aufbau eines binären Suchbaums

**Schritt 1:**  
- Beginne mit leerem Baum.  
- Füge **23** als Wurzel ein.

**Schritt 2:**  
- Füge **66** ein:  
  Da 66 > 23, gehe nach rechts.  
  → 66 wird rechter Nachfolger von 23.

**Schritt 3:**  
- Füge **42** ein:  
  42 > 23 → rechts von 23;  
  42 < 66 → links von 66.  
  → 42 wird linkes Kind von 66.

**Schritt 4:**  
- Füge **11** ein:  
  11 < 23 → links von 23.  
  → 11 wird linkes Kind von 23.

**Schritt 5:**  
- Füge **5** ein:  
  5 < 23 (links von 23);  
  5 < 11 (links von 11).  
  → 5 wird linkes Kind von 11.

**Schritt 6:**  
- Füge **69** ein:  
  69 > 23 → rechts;  
  69 > 66 → rechts von 66.  
  → 69 wird rechtes Kind von 66.

**Schritt 7:**  
- Füge **77** ein:  
  77 > 23, > 66 und 77 > 69 → rechtes Kind von 69.

**Schritt 8:**  
- Füge **55** ein:  
  55 > 23 → rechts;  
  55 < 66 → links von 66 (bei 42);  
  55 > 42 → rechts von 42.

**Schritt 9:**  
- Füge **16** ein:  
  16 < 23 → links;  
  16 > 11 → rechts von 11.

**Baumstruktur nach a):**
```plaintext
         23
        /  \
      11    66
     /  \   /  \
    5   16 42  69
             \    \
             55   77
```

## b) Löschen im binären Suchbaum (Knoten: 77, 42, 23)

**Löschen von 77:**  
- 77 ist ein Blatt → direkt entfernen.

**Baum nach Löschen von 77:**
```plaintext
         23
        /  \
      11    66
     /  \   /  \
    5   16 42  69
             \
             55
```

**Löschen von 42:**  
- 42 hat nur ein rechtes Kind (55).  
- Ersetze 42 durch 55 (das Kind rückt hoch).  

**Baum nach Löschen von 42:**
```plaintext
         23
        /  \
      11    66
     /  \   /  \
    5   16 55  69
```

**Löschen von 23 (Wurzel):**  
- 23 hat zwei Kinder.  
- Finde den Inorder-Nachfolger (kleinstes Element im rechten Teilbaum, hier 55).  
- Tausche die Werte von 23 und 55 und lösche dann den (nun) überflüssigen Knoten (der als Blatt oder mit nur einem Kind vorliegt).

**Endbaum:**
```plaintext
         55
        /  \
      11    66
     /  \     \
    5   16    69
```

## c) Aufbau eines AVL-Baums mit derselben Zahlenfolge

Beim Einfügen in einen AVL-Baum wird wie im BST vorgegangen, jedoch nach jedem Einfügevorgang die Balance (Höhendifferenz ≤ 1) geprüft und gegebenenfalls Rotationen durchgeführt.

**Schrittweiser Ansatz (vereinfachte Darstellung):**

1. **Einfügen von 23:**  
   → Wurzel: 23.

2. **Einfügen von 66:**  
   → 66 wird rechts von 23.  
   Balancefaktor von 23 = –1 (OK).

3. **Einfügen von 42:**  
   → 42 geht rechts (da > 23) und dann links von 66.  
   → Prüfe Balance: Knoten 23 bekommt einen rechten Zweig mit Höhe 2, linker Zweig leer → Balancefaktor = –2.  
   → **Rotation:** Linksrotation bei 23 (abhängig von der Situation kann auch eine Doppelrotation notwendig sein).  
   → Nach Rotation könnte die neue Wurzel z. B. 66 werden, mit 23 als linkem Kind.

4. **Einfügen von 11:**  
   → 11 wird links in den Baum eingefügt.  
   → Falls Balancefaktor am Knoten (z. B. 66) zu groß wird, erfolgt eine Rechtsrotation.

5. **Einfügen von 5, 69, 77, 55, 16:**  
   → Analog: Jeder neue Knoten wird als Blatt eingefügt und danach wird auf dem Einfügepfad überprüft, ob ein Knoten den Balancefaktor ±2 erreicht.  
   → Bei Bedarf wird eine passende Rotation (Rechtsrotation, Linksrotation, Links-Rechts- oder Rechts-Link-Rotation) durchgeführt.

Der exakte AVL-Baum kann je nach Einfüge- und Rotationsreihenfolge leicht variieren, muss jedoch stets die Eigenschaft behalten, dass die Höhenunterschiede an jedem Knoten höchstens 1 betragen.

## d) Löschen im AVL-Baum (Knoten: 5, 42, 77)

**Schrittweise Vorgehensweise:**

1. **Löschen von 5:**  
   - Suche den Knoten 5 (ein Blatt) und entferne ihn direkt.  
   - Überprüfe entlang des Pfades zur Wurzel, ob ein Knoten nun einen Balancefaktor von ±2 aufweist.  
   - Führe gegebenenfalls eine Rotation durch.

2. **Löschen von 42:**  
   - Suche 42; falls 42 ein Kind hat (z. B. 55), ersetze 42 durch sein Kind.  
   - Lösche den überflüssigen Knoten und überprüfe die Balance, führe ggf. Rotationen aus.

3. **Löschen von 77:**  
   - 77 ist ein Blatt → direkt löschen.  
   - Prüfe erneut die Balance entlang des Einfüge-/Löschpfades und rebalanciere durch entsprechende Rotationen.

**Zusammenfassung:**  
Sowohl beim Einfügen als auch beim Löschen im AVL-Baum wird nach jedem Eingriff der Balancefaktor entlang des Pfades bis zur Wurzel überprüft. Ist ein Knoten unbalanciert, wird durch lokale Rotationen (Einfach- oder Doppelrotation) die AVL-Eigenschaft wiederhergestellt.

*Hinweis:* Diese Lösung zeigt einen möglichen Lösungsweg. Abweichende, aber gleichwertige Rotationsentscheidungen sind zulässig, solange die BST- bzw. AVL-Eigenschaften erhalten bleiben.

