---
title: Arithmetische Codierung – Grundlagen und Ablauf
description: Detaillierte Erklärung der arithmetischen Codierung, einem verlustfreien Kompressionsverfahren, das Intervalle basierend auf Symbolhäufigkeiten nutzt.
tags:
    - Arithmetische Codierung
    - Kompression
    - Algorithmus
    - Verlustfrei
---

# Arithmetische Codierung – Grundlagen und Ablauf

Die **arithmetische Codierung** wandelt einen gesamten Text in eine Gleitkommazahl im Intervall [0,1) um. Dabei wird das Intervall sukzessive anhand der Auftretenswahrscheinlichkeiten einzelner Zeichen unterteilt.

## Grundidee:
- Jedem Zeichen wird ein Intervall zugeordnet, dessen Breite proportional zur Auftretenswahrscheinlichkeit ist.
- Der zu kodierende Text führt zu einer immer schmaler werdenden Unterteilung des Intervalls.
- Ein Wert aus dem finalen Intervall repräsentiert den gesamten Text.

## Ablauf:
1. **Vorbereitung:**  
   - Ermittle die Häufigkeit jedes Zeichens.
   - Unterteile das Intervall [0,1) in Teilintervalle entsprechend den Wahrscheinlichkeiten.
2. **Codierung:**  
   - Starte mit dem Intervall [0,1).
   - Für jedes Zeichen:  
     - Berechne die aktuelle Intervalllänge \( d = o - u \).  
     - Aktualisiere die Grenzen:
       - Neue obere Grenze: \( o = u + d \times \text{(obere Grenze des Zeichenintervalls)} \)
       - Neue untere Grenze: \( u = u + d \times \text{(untere Grenze des Zeichenintervalls)} \)
3. **Ergebnis:**  
   - Wähle einen Wert \( x \) zwischen \( u \) und \( o \) – dieser Wert kodiert den gesamten Text.

