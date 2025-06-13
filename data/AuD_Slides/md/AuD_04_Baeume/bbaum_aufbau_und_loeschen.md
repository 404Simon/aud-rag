---
title: Aufbau und Löschung in B‑Bäumen (Ordnung 2)
description: Baue einen B‑Baum der Ordnung 2 schrittweise auf und führe Löschoperationen (66, 42, 23) mit korrekter Behandlung von Überläufen und Unterläufen durch – inklusive ASCII-Art.
tags:
    - B‑Bäume
    - Übung
    - Aufbau
    - Löschung
    - Lösungen
---

# Aufgabe 1: Aufbau und Löschung in B‑Bäumen (Ordnung 2)

**Gegeben:** Zahlenfolge  
`23, 66, 42, 11, 5, 77, 69, 55, 16, 84`

In einem B‑Baum der Ordnung 2 (jeder Nicht-Wurzel-Knoten enthält mindestens 2 und höchstens 4 Schlüssel) werden Einfüge- und Löschoperationen so durchgeführt, dass alle Knoten immer ausreichend gefüllt sind.

---

## Teil a) – Aufbau des Baums

**Schritt 1: Einfügen von 23**  
```
[23]
```

**Schritt 2: Einfügen von 66**  
```
[23, 66]
```

**Schritt 3: Einfügen von 42**  
Sortiert:  
```
[23, 42, 66]
```

**Schritt 4: Einfügen von 11**  
Sortiert:  
```
[11, 23, 42, 66]
```
(Maximal 4 Schlüssel, also noch zulässig.)

**Schritt 5: Einfügen von 5**  
Temporärer Knoten:  
```
[5, 11, 23, 42, 66]
```
→ **Überlauf** (5 Schlüssel, Max = 4).  
Aufspaltung:
- **Linke Hälfte:** `[5, 11]`
- **Mittlerer Schlüssel:** `23` (wird zur neuen Wurzel)
- **Rechte Hälfte:** `[42, 66]`

Ergebnisbaum:
```
         [23]
        /    \
   [5, 11]   [42, 66]
```

**Schritt 6: Einfügen von 66**  
Da 66 bereits vorhanden ist, wird in diesem Beispiel ein weiterer Eintrag (oder ein Duplikat) als regulärer Fall übersprungen. Wir gehen direkt weiter.

**Schritt 7: Einfügen von 77**  
77 > 23 → rechter Knoten `[42, 66]`  
Einfügen ergibt:  
```
[42, 66, 77]
```

**Schritt 8: Einfügen von 69**  
Einfügen in rechten Knoten:  
```
[42, 66, 69, 77]
```
(Maximal 4 Schlüssel; Knoten ist voll.)

**Schritt 9: Einfügen von 55**  
Einfügen in rechten Knoten:  
Temporärer Knoten:  
```
[42, 55, 66, 69, 77]
```
→ **Überlauf** (5 Schlüssel).  
Aufspaltung:
- **Linke Hälfte:** `[42, 55]`
- **Mittlerer Schlüssel:** `66` wird in den Elternknoten übernommen.
- **Rechte Hälfte:** `[69, 77]`

Wurzel: Ursprünglich `[23]` wird nach Einfügen von `66` zu `[23, 66]`.

Aktueller Baum:
```
           [23, 66]
          /    |    \
   [5, 11]   [42, 55]   [69, 77]
```

**Schritt 10: Einfügen von 16**  
16 < 23 → linker Knoten `[5, 11]`  
Einfügen ergibt:  
```
[5, 11, 16]
```

**Schritt 11: Einfügen von 84**  
84 > 66 → rechter Knoten `[69, 77]`  
Einfügen ergibt:  
```
[69, 77, 84]
```

**Finaler Baum nach Aufbau:**
```
         [23, 66]
        /    |    \
[5, 11, 16] [42, 55] [69, 77, 84]
```

---

## Teil b) – Löschung der Schlüssel 66, 42 und 23

**Löschung von 66:**  
- **Fundort:** In der Wurzel `[23, 66]`.  
- **Vorgehen:** Da 66 in einem inneren Knoten steht, wird es durch seinen Inorder-Nachfolger ersetzt.  
  - **Inorder-Nachfolger:** Im rechten Kind `[69, 77, 84]` ist der kleinste Schlüssel `69`.
- **Umsetzung:**  
  - Ersetze 66 durch 69 → Wurzel wird zu `[23, 69]`.  
  - Entferne `69` aus dem rechten Knoten → rechter Knoten wird zu `[77, 84]`.

Neuer Baum:
```
         [23, 69]
        /    |    \
[5, 11, 16] [42, 55] [77, 84]
```

**Löschung von 42:**  
- **Fundort:** In dem Blatt `[42, 55]`.  
- **Vorgehen:** Entferne `42` → Knoten wird zu `[55]`.  
  - **Unterlauf:** Da ein Blatt in einem B‑Baum (außer der Wurzel) mindestens 2 Schlüssel haben muss, ist `[55]` unterfüllt.
- **Reparatur durch Leihen (von linkem Geschwister):**  
  - Linker Geschwisterknoten: `[5, 11, 16]` hat 3 Schlüssel und kann einen Schlüssel abgeben.
  - Vorgehen:  
    - Entnimm das größte Element `16` aus dem linken Knoten (dann wird er zu `[5, 11]`).
    - Tausche den Eltern-Trennschlüssel `23` mit dem ausgeliehenen `16`:  
      - Der ausgeliehene Schlüssel `16` rückt in die Wurzel, und `23` wird in den mittleren Knoten eingefügt.
    - So wird der mittlere Knoten korrigiert zu: `[16, 55]`  
    - Wurzel passt sich an und wird zu `[16, 69]`.

Ergebnisbaum:
```
         [16, 69]
        /    |    \
   [5, 11] [23, 55] [77, 84]
```

**Löschung von 23:**  
- **Fundort:** In dem Blatt `[23, 55]`.  
- **Vorgehen:** Entferne `23` → Knoten wird zu `[55]`.  
  - **Unterlauf:** `[55]` hat nur 1 Schlüssel (Mindestanforderung ist 2).
- **Reparatur durch Zusammenführen:**  
  - Da beide Geschwister (linker `[5, 11]` und rechter `[77, 84]`) genau die Mindestanzahl besitzen, ist Leihen nicht möglich.
  - Wähle z. B. das Zusammenführen mit dem linken Geschwister:  
    - Führe den unterfüllten Knoten `[55]` mit dem linken Knoten `[5, 11]` unter Herabziehen des Trennschlüssels `16` aus der Wurzel zusammen.
    - Verschmolzener Knoten: `[5, 11, 16, 55]`
    - Entferne `16` aus der Wurzel → Wurzel wird zu `[69]` und hat nun zwei Kinder:
      - Linke Seite: `[5, 11, 16, 55]`
      - Rechte Seite: `[77, 84]`

**Finaler Baum nach Löschen von 66, 42 und 23:**
```
         [69]
        /    \
[5, 11, 16, 55] [77, 84]
```

Diese Schritte stellen sicher, dass nach jedem Löschen die B‑Baum-Eigenschaften (Mindestfüllung, Balanciertheit) eingehalten werden.

