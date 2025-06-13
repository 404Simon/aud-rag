---
title: LZW-Algorithmus – Prinzip und Kompressionsverfahren
description: Einführung in den LZW-Algorithmus, ein dynamisches Wörterbuchverfahren zur Kompression, das Sequenzen von Zeichen effizient kodiert.
tags:
    - LZW
    - Kompression
    - Wörterbuchverfahren
    - Algorithmus
---

# LZW-Algorithmus – Prinzip und Kompressionsverfahren

Der **LZW-Algorithmus** (Lempel-Ziv-Welch) ist ein dynamisches Wörterbuchverfahren, das zur verlustfreien Datenkompression eingesetzt wird.

## Grundprinzip:
- **Initialisierung:**  
  - Das Wörterbuch wird zu Beginn mit allen einzelnen Zeichen des Quellalphabets vorbefüllt.
- **Wörterbuch-Erweiterung:**  
  - Während der Verarbeitung werden neue Einträge (Zeichenfolgen) dynamisch hinzugefügt.
- **Kein Vorab-Statistik:**  
  - Es ist keine vorherige Analyse der Daten erforderlich, da das Wörterbuch im Laufe der Codierung aufgebaut wird.

## Kompressionsablauf:
1. Setze das Präfix \( P \) auf einen leeren String.
2. Lese das nächste Zeichen \( c \) aus der Eingabe.
3. Prüfe, ob \( P+c \) bereits im Wörterbuch enthalten ist:
   - **Falls ja:**  
     Setze \( P = P+c \).
   - **Falls nein:**  
     - Gib den Code für \( P \) aus.  
     - Füge \( P+c \) in das Wörterbuch ein.  
     - Setze \( P = c \).
4. Wiederhole die Schritte bis zum Ende der Eingabe.
5. Gib abschließend den Code für das verbleibende Präfix \( P \) aus.

Durch die dynamische Anpassung des Wörterbuchs werden häufig vorkommende Zeichenfolgen durch kürzere Codes ersetzt.

