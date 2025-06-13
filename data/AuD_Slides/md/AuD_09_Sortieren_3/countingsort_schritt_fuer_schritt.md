---
title: Counting Sort – Schritt-für-Schritt Lösung  
description: Ausführliche Schrittweise Anwendung von Counting Sort an einem Zahlenfeld mit definierten Schlüsselwerten.  
tags:
    - Counting Sort
    - Schritt-für-Schritt
    - Sortieren
    - Algorithmus
---

# Counting Sort – Schritt-für-Schritt Lösung

**Aufgabenstellung:**  
Sortiere das Zahlenfeld unter Verwendung von Counting Sort. Zulässige Schlüsselwerte: {5, 8, 11, 17, 23}.  
Gegeben sei das Zahlenfeld:  
```
23, 66, 42, 11, 69, 5, 77, 55, 23, 5, 8, 11, 5, 5, 11, 8
```

**Schritt 1: Filtern der zulässigen Schlüssel**  
Erlaube nur Werte, die in {5, 8, 11, 17, 23} enthalten sind.  
- Nicht-zulässige Werte (66, 42, 69, 77, 55) werden ignoriert.  
So bleibt:  
```
23, 11, 5, 23, 5, 8, 11, 5, 5, 11, 8
```

**Schritt 2: Initialisierung des Hilfsfelds**  
Erstelle ein Zählfeld H für die erlaubten Schlüssel (5, 8, 11, 17, 23) und initialisiere alle Zähler mit 0:  
```
H[5] = 0, H[8] = 0, H[11] = 0, H[17] = 0, H[23] = 0
```

**Schritt 3: Zählen der Vorkommen**  
Gehe das gefilterte Array durch und erhöhe den jeweiligen Zähler:  
- 23 → H[23] wird 1  
- 11 → H[11] wird 1  
- 5  → H[5] wird 1  
- 23 → H[23] wird 2  
- 5  → H[5] wird 2  
- 8  → H[8] wird 1  
- 11 → H[11] wird 2  
- 5  → H[5] wird 3  
- 5  → H[5] wird 4  
- 11 → H[11] wird 3  
- 8  → H[8] wird 2  

Endzustand:  
```
H[5] = 4, H[8] = 2, H[11] = 3, H[17] = 0, H[23] = 2
```

**Schritt 4: Erzeugen des sortierten Arrays**  
Erzeuge das Ergebnisfeld, indem du jeden Schlüssel entsprechend seiner Häufigkeit ausgibst:  
- Füge viermal 5 ein: 5, 5, 5, 5  
- Füge zweimal 8 ein: 8, 8  
- Füge dreimal 11 ein: 11, 11, 11  
- Füge nullmal 17 ein: (überspringen)  
- Füge zweimal 23 ein: 23, 23  

**Sortiertes Array:**  
```
[5, 5, 5, 5, 8, 8, 11, 11, 11, 23, 23]
```

