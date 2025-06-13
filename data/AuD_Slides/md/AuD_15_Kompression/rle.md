---
title: Lauflängencodierung (RLE) – Grundlagen und Beispiele
description: Einführung in die Lauflängencodierung, ein Verfahren zur Kompression durch Erfassung von Wiederholungen in Daten, inklusive Schritt-für-Schritt Beispielen.
tags:
    - Lauflängencodierung
    - RLE
    - Kompression
    - Datenstrukturen
---

# Lauflängencodierung (RLE) – Grundlagen und Beispiele

Die **Lauflängencodierung** (Run-Length Encoding, RLE) reduziert Daten, indem sie Wiederholungen („Runs“) zusammenfasst.

## Grundprinzip:
- **Identifikation von Runs:**  
  Eine Sequenz gleicher Zeichen wird als ein Run betrachtet.
- **Kodierung:**  
  Ein Run wird dargestellt als:  
  `Zeichen#<Anzahl>`  
  *Beispiel:*  
  - Eingabe: `XXXXXYYZZZZZZZZZU`  
  - Kodierung: `X#5YYZ#9U`

## Sonderzeichen:
- Ein festgelegtes Symbol (z. B. `#`) trennt das Zeichen von der Lauflänge.
- Kommt das Sonderzeichen in den Daten vor, wird es als Doppel-Sonderzeichen (z. B. `##`) kodiert.

## Anwendung auf Binärwerte:
- Bei einer Folge wie:  
  `0000000000000001111111000000011111111111`  
  wird zunächst der längste Run ermittelt (hier z. B. 15), sodass eine geeignete Bit-Breite (z. B. 4 Bit) für die Länge gewählt werden kann.

Diese Methode ist besonders effektiv bei Daten, die viele Wiederholungen enthalten – etwa einfache Grafiken oder Bilddaten.

