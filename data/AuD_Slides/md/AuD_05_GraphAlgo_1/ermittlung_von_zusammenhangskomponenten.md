---
title: Ermittlung von Zusammenhangskomponenten  
description: Identifikation zusammenhängender Teilgraphen mittels DFS/BFS – schrittweise Vorgehensweise anhand eines Beispiels.  
tags:
    - Graphen
    - Zusammenhang
    - Algorithmus
    - Komponenten
---

# Ermittlung von Zusammenhangskomponenten

Um **Zusammenhangskomponenten** in einem Graphen zu finden, wird jeder unbesuchte Knoten als Startpunkt einer neuen Komponente verwendet.

**Beispiel:**  
Angenommen, ein Graph besteht aus zwei getrennten Teilen:  
- Komponente 1: A, B, C  
- Komponente 2: D, E

**Schritt-für-Schritt Ablauf:**  

1. **Initialisierung:**  
   - Setze für jeden Knoten den Komponenten-Index auf 0.  
   - counter = 0

2. **Iteration:**  
   - Beginne bei Knoten A. Da A unbesucht ist (Index 0), erhöhe counter auf 1 und starte eine DFS/BFS ab A.  
   - Alle Knoten, die von A aus erreicht werden (A, B, C), erhalten den Wert 1.

3. **Fortsetzung:**  
   - Gehe zum nächsten Knoten, D. Da D noch 0 hat, erhöhe counter auf 2 und starte die Suche ab D.  
   - D und E werden mit 2 markiert.

**Ergebnis:**  
- Knoten A, B, C: Komponente 1  
- Knoten D, E: Komponente 2

Diese Methode hilft, die Struktur eines Graphen zu verstehen und kann z. B. in der Bildverarbeitung zur Objekterkennung genutzt werden.

