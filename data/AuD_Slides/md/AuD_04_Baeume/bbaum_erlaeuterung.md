---
title: B*-Bäume erläutern (mit Lösung)
description: Erläutere die Idee des B*-Baums und seine Vorteile gegenüber gewöhnlichen B‑Bäumen – die Lösung ist klar und korrekt.
tags:
    - B‑Bäume
    - B*-Bäume
    - Übung
    - Lösung
    - Datenstrukturen
---

# Aufgabe 2: B*-Bäume erläutern (mit Lösung)

**Aufgabenstellung:**  
Erkläre die Idee des B*-Baums und nenne, warum diese Datenstruktur gegenüber herkömmlichen B‑Bäumen eine Verbesserung darstellt.

**Lösung:**

Ein **B*-Baum** ist eine optimierte Variante des klassischen B‑Baums. Die wesentlichen Unterschiede und Vorteile sind:

1. **Trennung von Schlüsseln und Daten:**
   - **Innere Knoten:** Enthalten ausschließlich Schlüsselwerte als Wegweiser. Sie speichern keine vollständigen Datensätze.
   - **Blattknoten:** Speichern die kompletten Datensätze (Schlüssel plus Restdaten).

2. **Erhöhte Knotenausnutzung:**
   - Da in den inneren Knoten nur Schlüssel (und nicht der gesamte Datensatz) gespeichert werden, passen wesentlich mehr Schlüssel in einen Knoten.
   - Dies führt zu einer besseren Ausnutzung des Plattenplatzes.

3. **Reduzierte Baumhöhe:**
   - Mehr Schlüssel pro Knoten bedeuten, dass der Baum breiter wird und somit weniger Ebenen benötigt.
   - Eine geringere Baumhöhe führt zu weniger Plattenzugriffen bei Suchvorgängen.

4. **Effizientere Zwischenspeicherung:**
   - Aufgrund der geringeren Anzahl an inneren Knoten können diese oft vollständig im Hauptspeicher gepuffert werden, was die Suchgeschwindigkeit weiter erhöht.

**ASCII-Diagramm zur Veranschaulichung:**
```
         [ 30 | 50 | 70 ]    <-- Innere Knoten (nur Schlüssel)
           /     |     \
          /      |      \
    [Data]   [Data]    [Data]   <-- Blattknoten (Schlüssel + komplette Daten)
```

*Fazit:*  
Die Trennung von Schlüssel und Daten und die verbesserte Knotenausnutzung machen B*-Bäume besonders attraktiv, vor allem bei sehr großen Datenmengen, da sie die Anzahl der benötigten Plattenzugriffe drastisch senken.

