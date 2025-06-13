---
title: B*-Bäume; Erweiterung und Optimierung
description: Erklärt, wie B*-Bäume als optimierte Variante von B‑Bäumen mehr Einträge pro Knoten ermöglichen, illustriert mit ASCII-Art.
tags:
    - B*-Bäume
    - Optimierung
    - B‑Bäume
    - Datenstrukturen
---

# B*-Bäume: Erweiterung und Optimierung

**B*-Bäume** sind eine optimierte Variante der B‑Bäume. Sie unterscheiden sich in folgenden Punkten:

- **Trennung von Schlüssel und Daten:**  
  - **Innere Knoten:** Enthalten nur Schlüsselwerte als Wegweiser.
  - **Blattknoten:** Speichern die kompletten Datensätze (Schlüssel + Restdaten).

- **Erhöhte Knotenausnutzung:**  
  Mehr Einträge passen in einen Knoten, was zu einer deutlich geringeren Baumhöhe führt.

**ASCII-Diagramm: Struktur eines B*-Baums**

```
        [ 30 | 50 | 70 ]       <-- Innere Knoten (nur Schlüssel)
          /     |     \
         /      |      \
  [Data]   [Data]   [Data]     <-- Blattknoten (Schlüssel + Daten)
```

Dadurch sinkt die Anzahl der nötigen Plattenzugriffe, und viele innere Knoten können im Hauptspeicher gepuffert werden.

