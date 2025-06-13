---
title: Übungen zu Hashing – Aufgabe 3
description: Schritt-für-Schritt-Anleitung zum Einfügen von Zahlen in eine Hash-Tabelle mit Verkettung und linearem Sondieren.
tags:
    - Hashing
    - Übung
    - Algorithmus
    - Aufgaben
---

# Übungen zu Hashing – Aufgabe 3

**Gegebene Zahlenfolge:**  
`23, 24, 41, 34, 59, 61, 63, 55, 16, 84`

**Teil (a): Verkettete Überläufer**  
- Verwenden Sie die Hash-Funktion: `h(x) = x mod 9`  
- Fügen Sie die Zahlen nacheinander in eine Hash-Tabelle ein, in der bei Kollisionen die Werte in einer Liste (verkettete Überläufer) gesammelt werden.

**Teil (b): Lineares Sondieren**  
- Nutzen Sie dieselbe Hash-Funktion `h(x) = x mod 9` für die Einfügung in ein Array.  
- Bei Kollisionen probieren Sie sukzessive die nächsten Indizes (lineares Sondieren).  
- Überschreitet der Füllgrad 80%, wird die Tabellengröße um 50% erhöht. Anschließend wird die neue Hash-Funktion `x mod m` (wobei m die neue Größe ist) verwendet.

**Schritt-für-Schritt-Anleitung (b):**
1. Berechne den Startindex für jeden Schlüssel.
2. Prüfe, ob der berechnete Index frei ist.
3. Falls belegt, gehe linear zum nächsten Index über.
4. Überwache den Füllgrad und erweitere bei Bedarf die Tabelle.

