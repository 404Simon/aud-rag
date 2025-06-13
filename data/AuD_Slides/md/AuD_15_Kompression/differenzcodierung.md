---
title: Differenzcodierung – Prinzip und Vorgehensweise
description: Detaillierte Erklärung der Differenzcodierung, einem Verfahren zur Kompression von Messwerten durch Speicherung von Differenzen statt absoluten Werten.
tags:
    - Differenzcodierung
    - Kompression
    - Algorithmus
    - Verlustfrei
---

# Differenzcodierung – Prinzip und Vorgehensweise

Die **Differenzcodierung** speichert nicht die absoluten Werte, sondern die Differenz zwischen aufeinanderfolgenden Werten. Dies ist besonders sinnvoll bei Messwerten, die sich nur geringfügig ändern.

## Vorgehensweise:
1. **Initialisierung:**  
   - Speichere den ersten Wert vollständig.
2. **Differenzbildung:**  
   - Für jeden folgenden Wert \( x_i \) berechne die Differenz:  
     \( d_i = x_i - x_{i-1} \).
3. **Kodierung:**  
   - Kleine Differenzen, die häufig vorkommen, werden mit kurzen, variablen Codewörtern dargestellt.
   - Überschreitet die Differenz einen festgelegten Maximalwert, wird ein spezielles Codewort genutzt, um den absoluten Wert erneut zu speichern.

## Varianten:
- **Verlustfreie Differenzcodierung:**  
  Alle Differenzen werden exakt gespeichert.
- **Verlustbehaftete Differenzcodierung:**  
  Hierbei werden Differenzen in einem Intervall kodiert, was zu einem geringen Informationsverlust führt, jedoch oft höhere Kompressionsraten ermöglicht.

*Beispiel:*  
Werte: 100, 102, 103, 105  
Differenzen: –, 2, 1, 2  
Die Kodierung speichert statt 100,102,103,105 nur den Startwert 100 und dann 2, 1, 2.

