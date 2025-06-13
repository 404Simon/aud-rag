---
title: Zusammenfassung zu B‑Bäumen und B*-Bäumen
description: Bietet einen kompakten Überblick über Motivation, Definition, Operationen und Optimierungen in B‑Bäumen und B*-Bäumen, unterstützt durch ASCII-Art.
tags:
    - B‑Bäume
    - Zusammenfassung
    - B*-Bäume
    - Datenstrukturen
---

# Zusammenfassung zu B‑Bäumen und B*-Bäumen

- **Motivation:**  
  Entwicklung von Suchstrukturen zur effizienten Nutzung von externen Speichern durch Speicherung mehrerer Datensätze pro Knoten.

- **Definition:**  
  B‑Bäume der Ordnung _m_ haben in jedem Knoten zwischen _m_ und _2m_ Einträgen. Alle Blätter sind auf derselben Ebene.

- **Operationen:**  
  - **Suchen:** Start an der Wurzel, Vergleich der Schlüssel und rekursive Suche.  
    _ASCII-Diagramm:_  
    ```
         [ 30 | 50 | 70 ]
         /     |     \
    ```
  - **Einfügen:** Direktes Einfügen oder Aufspaltung bei Überlauf, wobei der mittlere Schlüssel nach oben wandert.
  - **Löschen:** Entfernen des Schlüssels, Behandlung von Unterläufen durch Leihen oder Zusammenführen.

- **Aufwand:**  
  Alle Operationen haben eine Komplexität von _O(logₘ(n))_, was eine geringe Baumhöhe garantiert.

- **B*-Bäume:**  
  Optimierte B‑Bäume, bei denen innere Knoten nur Schlüssel enthalten und Blattknoten die Daten. Dadurch sinkt die Baumhöhe und die Anzahl der Plattenzugriffe erheblich.

