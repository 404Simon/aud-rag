---
title: LZW-Dekompression – Schritt-für-Schritt Anleitung
description: Detaillierte Anleitung zur Dekompression mit dem LZW-Algorithmus, inklusive Aufbau des Wörterbuchs und Behandlung von Sonderfällen.
tags:
    - LZW
    - Dekompression
    - Algorithmus
    - Datenkompression
---

# LZW-Dekompression – Schritt-für-Schritt Anleitung

Die Dekompression beim LZW-Algorithmus erfolgt durch einen parallelen Aufbau des Wörterbuchs während des Dekodierens.

## Ablauf:
1. **Initialisierung:**  
   Erstelle ein Wörterbuch mit den Einzelzeichen (z. B. A, B, C).
2. **Dekodierungsschleife:**  
   - Lese das nächste Codewort \( c \).
   - Falls \( c \) im Wörterbuch vorhanden ist, bestimme den zugehörigen String \( s \) und gib diesen aus.
   - Hänge an den zuletzt ausgegebenen String \( P \) das erste Zeichen von \( s \) an und füge diese neue Sequenz ins Wörterbuch ein.
   - Sonderfall: Falls \( c \) nicht im Wörterbuch ist, erweitere \( P \) um dessen erstes Zeichen, gib die Sequenz aus und füge sie dem Wörterbuch hinzu.
3. **Wiederhole** bis alle Codes verarbeitet sind.

## Beispiel (passend zum obigen Kompressionsbeispiel):
Angenommen, die komprimierte Sequenz ist:  
```
000 001 011 010 100 001
```
Mit initialem Wörterbuch:  
- A → 000  
- B → 001  
- C → 010

### Schritt-für-Schritt-Lösung:
1. **Erster Code (000):**  
   → Gibt "A" aus. \( P = "A" \).
2. **Zweiter Code (001):**  
   → Gibt "B" aus.  
   → Ergänze \( P \) ("A") + erster Buchstabe von "B" = "AB" ins Wörterbuch.
3. **Dritter Code (011):**  
   → \( 011 \) steht für "AB" (neu hinzugefügt).  
   → Ausgabe: "AB".  
   → Ergänze \( P \) ("B") + erster Buchstabe von "AB" = "BA" ins Wörterbuch.
4. **Weitere Schritte:**  
   Entsprechend wird das Wörterbuch dynamisch erweitert, sodass am Ende die ursprüngliche Zeichenfolge rekonstruiert wird.

## Lösung:
Durch den parallelen Aufbau des Wörterbuchs während des Dekodierens wird die Originalsequenz "ABABCBABAB" wiederhergestellt – exakt entsprechend dem Kompressionsbeispiel.

