---
title: Tiefensuche (DFS)  
description: Algorithmus, der so tief wie möglich in einen Graphen vordringt – inklusive schrittweiser Durchrechnung mit rekursiver und iterativer Variante.  
tags:
    - Graphen
    - DFS
    - Algorithmus
    - Traversierung
---

# Tiefensuche (DFS)

Die **Tiefensuche (DFS)** erkundet einen Graphen, indem sie so tief wie möglich in einen Zweig vordringt, bevor sie zurückkehrt.

**Beispiel (rekursive Variante):**  
Betrachte denselben Graphen wie bei BFS:

```
   A
  / \
 B   C
  \ /
   D
```

**Schritt-für-Schritt Ablauf (rekursiv):**  

1. **Start:**  
   - Beginne bei A, markiere A als besucht und gib A aus.
   - Besuchsreihenfolge bisher: A

2. **Rekursiver Aufruf für A:**  
   - Wähle als erstes den Nachbarn B.  
   - Rufe DFS(B) auf, markiere B und gib B aus.  
   - Besuchsreihenfolge: A, B

3. **Rekursiver Aufruf für B:**  
   - B hat D als unbesuchten Nachbarn.  
   - Rufe DFS(D) auf, markiere D und gib D aus.  
   - Besuchsreihenfolge: A, B, D

4. **Rückkehr:**  
   - D hat keine unbesuchten Nachbarn, Rückkehr zu B.  
   - Bei B sind alle Nachbarn besucht, Rückkehr zu A.

5. **Fortsetzung bei A:**  
   - Nächster unbesuchter Nachbar von A ist C.  
   - Rufe DFS(C) auf, markiere C und gib C aus.  
   - Endgültige Besuchsreihenfolge: A, B, D, C

**Iterative Variante (mit Stapel):**  

1. **Initialisierung:**  
   - Starte mit einem Stapel und lege A hinein.  
   - Stapel: [A]

2. **Schleife:**  
   - Pop A, besuche A → Besuchsreihenfolge: A  
   - Füge unbesuchte Nachbarn (B, C) hinzu – typischerweise in umgekehrter Reihenfolge, damit der linke zuerst besucht wird.  
   - Stapel: [C, B]

3. **Weiter:**  
   - Pop B, besuche B → Besuchsreihenfolge: A, B  
   - Füge Nachbar D hinzu.  
   - Stapel: [C, D]

4. **Weiter:**  
   - Pop D, besuche D → Besuchsreihenfolge: A, B, D  
   - D hat keine unbesuchten Nachbarn.  
   - Stapel: [C]

5. **Abschluss:**  
   - Pop C, besuche C → Besuchsreihenfolge: A, B, D, C  
   - Stapel leer, Algorithmus beendet.

