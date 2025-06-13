---
title: Übung 5 – Analyse von Suchpfaden in Binärbäumen
description: Schritt-für-Schritt-Lösung zur Analyse von Suchpfaden in binären Suchbäumen und zur Identifikation einer ungültigen Knotenfolge.
tags:
    - Übung
    - Binärer Suchbaum
    - Suchpfad
    - Lösung
---

# Übung 5 – Analyse von Suchpfaden

**Aufgabenstellung:**  
Es sind alle Zahlen von 1 bis 1000 in einem Binärbaum gespeichert. Gesucht wird die Zahl 363. Mehrere Knotenfolgen (Sequenzen) werden als mögliche Suchpfade angegeben. Bestimme, welche Sequenz **nicht** der Überprüfung eines gültigen Suchpfads entsprechen kann.

## Lösungsansatz:

1. **Prinzip eines BST-Suchpfades:**  
   - Beginne an der Wurzel.  
   - Gehe nach rechts, wenn der gesuchte Wert größer ist, oder nach links, wenn er kleiner ist.

2. **Schritt-für-Schritt-Überprüfung:**  
   - Für jede Sequenz:  
     - Vergleiche den aktuellen Knoten mit 363 und bestimme, ob der nächste Schritt (links oder rechts) der BST-Logik entspricht.  
     - Bestimme dabei den erlaubten Wertebereich für den nächsten Knoten.
     
3. **Beispielhafte Analyse:**  
   - **Sequenz A:**  
     - Startet bei einem kleinen Wert, geht dann in einen Bereich, der logisch passt, bis 363 erreicht wird.  
   - **Sequenz C (als Beispiel):**  
     - Wenn an irgendeiner Stelle ein Knoten den erwarteten Bereich verlässt (z. B. nach einem größeren Wert plötzlich ein kleinerer Wert), ist diese Sequenz ungültig.

4. **Ergebnis:**  
   - Durch systematische Überprüfung aller Sequenzen (a bis e) identifiziert man jene, die den BST-Eigenschaften widerspricht.  
   - In der Vorlesung wurde als Beispiel oft Sequenz **c)** als ungültig ausgewiesen.

**Fazit:**  
Die Sequenz, bei der ein Knotenwert den durch die bisherigen Vergleiche vorgegebenen Bereich verletzt, entspricht **nicht** einem gültigen Suchpfad.  
Dies ist exemplarisch für die Vorgehensweise, auch wenn die genaue Sequenz anhand der vorgegebenen Zahlenfolge ermittelt werden muss.

