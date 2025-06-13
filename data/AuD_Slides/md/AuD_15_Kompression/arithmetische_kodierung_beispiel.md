---
title: Arithmetische Codierung – Schritt-für-Schritt Beispiel
description: Ein detailliertes Beispiel zur arithmetischen Codierung anhand des Wortes "ESSEN", inklusive Intervallberechnung und Dekodierung.
tags:
    - Arithmetische Codierung
    - Beispiel
    - Datenkompression
---

# Arithmetische Codierung – Schritt-für-Schritt Beispiel

**Beispiel: Codierung des Wortes "ESSEN"**

Gegeben sei folgende Wahrscheinlichkeitsverteilung:
- **E**: \( \frac{2}{5} \) → Intervall \([0, 0.4[\)
- **S**: \( \frac{2}{5} \) → Intervall \([0.4, 0.8[\)
- **N**: \( \frac{1}{5} \) → Intervall \([0.8, 1.0[\)

## Codierungsschritte:

1. **Initialisierung:**  
   - Starte mit dem Intervall \([0, 1)\).

2. **Erstes Zeichen "E":**
   - \( d = 1.0 - 0 = 1.0 \)  
   - Neue Grenzen:  
     - \( u = 0 + 1 \times 0 = 0 \)  
     - \( o = 0 + 1 \times 0.4 = 0.4 \)  
   - Neues Intervall: \([0, 0.4)\).

3. **Zweites Zeichen "S":**
   - \( d = 0.4 - 0 = 0.4 \)  
   - Aktualisierung:  
     - \( u = 0 + 0.4 \times 0.4 = 0.16 \)  
     - \( o = 0 + 0.4 \times 0.8 = 0.32 \)  
   - Neues Intervall: \([0.16, 0.32)\).

4. **Drittes Zeichen "S":**
   - \( d = 0.32 - 0.16 = 0.16 \)  
   - Aktualisierung:  
     - \( u = 0.16 + 0.16 \times 0.4 = 0.224 \)  
     - \( o = 0.16 + 0.16 \times 0.8 = 0.288 \)  
   - Neues Intervall: \([0.224, 0.288)\).

5. **Viertes Zeichen "E":**
   - \( d = 0.288 - 0.224 = 0.064 \)  
   - Aktualisierung:  
     - \( u = 0.224 + 0.064 \times 0 = 0.224 \)  
     - \( o = 0.224 + 0.064 \times 0.4 = 0.2496 \)  
   - Neues Intervall: \([0.224, 0.2496)\).

6. **Fünftes Zeichen "N":**
   - \( d = 0.2496 - 0.224 = 0.0256 \)  
   - Aktualisierung:  
     - \( u = 0.224 + 0.0256 \times 0.8 = 0.24448 \)  
     - \( o = 0.224 + 0.0256 \times 1.0 = 0.2496 \)  
   - Endintervall: \([0.24448, 0.2496)\).

Das finale kodierte Ergebnis kann z. B. \( x = 0.24448 \) lauten.  
Zur **Dekodierung** wird der Prozess umgekehrt, indem der Codewert Schritt für Schritt in das passende Zeichenintervall eingeordnet wird.

