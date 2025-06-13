---
title: Hamiltonsches Problem
description: Detaillierte Erklärung des Hamiltonschen Problems mit Schritt-für-Schritt-Darstellung, warum das Problem NP-vollständig ist, anhand eines konkreten Graphen.
tags:
    - Hamilton
    - Hamiltonkreis
    - NP-Vollständig
    - Beispiel
---

# Hamiltonsches Problem – Ausführliche Analyse

**Grundidee:**  
Ein Hamiltonkreis besucht jeden Knoten eines Graphen genau einmal und kehrt zum Ausgangsknoten zurück. Es gibt keine einfache Regel wie bei Euler – alle möglichen Reihenfolgen müssen geprüft werden.

**Schritt-für-Schritt-Vorgehen:**  
1. **Alle Permutationen:**  
   - Erzeuge alle möglichen Reihenfolgen der Knoten.  
   - Prüfe für jede Permutation, ob aufeinanderfolgende Knoten benachbart sind.

2. **Beispiel:**  
   - Graph: Knoten A, B, C, D mit Kanten: A–B, B–C, C–D, D–A, A–C, B–D  
   - Mögliche Permutationen:  
     - A → B → C → D → A  
     - A → C → B → D → A  
     - … (insgesamt 3! = 6 Permutationen, wenn A als Start fixiert wird)  
   - Prüfe z. B.:  
     - Für A → B → C → D → A:  
       - A–B: vorhanden  
       - B–C: vorhanden  
       - C–D: vorhanden  
       - D–A: vorhanden  
     - Somit ist A → B → C → D → A ein Hamiltonkreis.

**Schwierigkeit:**  
Der algorithmische Aufwand wächst mit der Anzahl der Knoten sehr schnell (n!), was zeigt, warum das Problem zu den NP-vollständigen gehört.

