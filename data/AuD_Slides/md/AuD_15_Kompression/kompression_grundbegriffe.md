---
title: Grundbegriffe der Kompression
description: Einführung in grundlegende Konzepte der Datenkompression, wie Kompressionsfaktor, Redundanz, blockbasierte und variable Länge Codes.
tags:
    - Kompression
    - Grundbegriffe
    - Datenkompression
    - Informatik
---

# Grundbegriffe der Kompression

**Datenkompression** zielt darauf ab, den Speicherbedarf von Daten zu reduzieren. Wichtige Konzepte sind:

- **Blockcode**: Alle Codes haben eine feste Wortlänge – häufig mit hoher Redundanz.
- **Variable Länge Codes**: Passen die Code-Länge an die Häufigkeit der Zeichen an (z. B. Huffman-Codierung).

**Kompressionsfaktor (KF)**  
Misst, wie stark Daten komprimiert wurden.  
*Beispiel:*  
- Unkomprimierte Daten: 1000 Einheiten  
- Komprimierte Daten: 200 Einheiten  
→ Hier wurde 80 % des Speicherplatzes eingespart.

**Verlustfrei vs. verlustbehaftet:**  
- **Verlustfrei:** Alle Informationen bleiben erhalten (z. B. Texte, PNG).  
- **Verlustbehaftet:** Es wird ein gewisser Informationsverlust in Kauf genommen, um höhere Kompressionsraten zu erzielen (z. B. JPEG, MP3).

