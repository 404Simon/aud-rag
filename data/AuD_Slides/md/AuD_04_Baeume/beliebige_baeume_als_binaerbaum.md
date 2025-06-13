---
title: Beliebige Bäume als Binärbäume
description: Umwandlung beliebiger (n-ärer) Bäume in Binärbäume mittels der Nachfolger-Geschwister-Repräsentation zur effizienten Darstellung.
tags:
    - Beliebige Bäume
    - Binärbaum
    - Repräsentation
    - Datenstruktur
---

# Beliebige Bäume als Binärbäume

**Idee:**  
- Ein n-ärer Baum wird in einen Binärbaum transformiert, indem man jedem Knoten zwei Zeiger zuordnet:
  - **Erster Nachfolger:** Zeigt auf das erste Kind.
  - **Nächster Geschwisterknoten:** Zeigt auf das nächste Geschwisterelement.

**ASCII-Darstellung:**
```
      (A)
       |
    (B) -> (C) -> (D)
```
Hier ist (B) das erste Kind von (A) und (C), (D) sind die Geschwister von (B).
