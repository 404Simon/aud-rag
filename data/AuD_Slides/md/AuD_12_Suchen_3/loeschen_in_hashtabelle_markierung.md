---
title: Löschen in Hash-Tabellen Markierung
description: Erklärung der Markierungsmethode beim Löschen in Hash-Tabellen, die die Suchkette durch Setzen eines "Gelöscht"-Status erhält.
tags:
    - Hashing
    - Löschen
    - Markierung
    - Algorithmus
---

# Löschen in Hash-Tabellen: Markierung

**Prinzip:**
Anstatt einen Eintrag physisch zu entfernen, wird dieser als gelöscht markiert. Dadurch bleibt die Sondierungskette erhalten und der freie Platz kann für neue Einträge wieder genutzt werden.

**Vorteile:**
- Einfach und performanter als vollständige Reorganisation.

**Nachteil:**
- Häufiges Löschen kann zu vielen Markierungen führen, was die Suche verlangsamen kann.

