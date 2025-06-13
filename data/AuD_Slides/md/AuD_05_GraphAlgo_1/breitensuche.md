---
title: Breitensuche (BFS)  
description: Algorithmus zur schichtweisen Erkundung eines Graphen – inklusive Schritt-für-Schritt Beispiel mit FIFO-Schlange.  
tags:
    - Graphen
    - BFS
    - Algorithmus
    - Traversierung
---

# Breitensuche (BFS)

Die **Breitensuche (BFS)** besucht alle Knoten in der Reihenfolge ihrer Entfernung vom Startknoten.

**Beispiel:**  
Betrachte einen ungerichteten Graphen:

```
   A
  / \
 B   C
  \ /
   D
```

**Schritt-für-Schritt Ablauf:**  

1. **Initialisierung:**  
   - Starte bei A.  
   - Markiere A als besucht, setze Distanz = 0 und lege A in die Schlange ein.  
   - Schlange: [A].

2. **Erster Durchlauf:**  
   - Entnehme A aus der Schlange.  
   - Besuche Nachbarn: B und C.  
   - Markiere B und C, setze Distanz = 1 und füge sie in die Schlange ein.  
   - Schlange: [B, C].

3. **Zweiter Durchlauf:**  
   - Entnehme B.  
   - B hat als Nachbar D.  
   - Markiere D, setze Distanz = 2 und füge D in die Schlange ein.  
   - Schlange: [C, D].

4. **Dritter Durchlauf:**  
   - Entnehme C.  
   - C hat ebenfalls D als Nachbar, aber D ist schon besucht.  
   - Schlange: [D].

5. **Vierter Durchlauf:**  
   - Entnehme D.  
   - D hat keine unbesuchten Nachbarn.  
   - Schlange: [] → Algorithmus beendet.

**Ergebnis:**  
- Besuchsreihenfolge: A → B → C → D  
- Distanzen: A (0), B (1), C (1), D (2)

