---
title: Überlaufbereich in Hash-Tabellen
description: Erklärung des Überlaufbereichs zur Ablage von Elementen, die aufgrund von Kollisionen nicht in die Haupttabelle passen.
tags:
    - Hashing
    - Überlaufbereich
    - Kollisionsbehandlung
    - Datenstruktur
---

# Überlaufbereich in Hash-Tabellen

**Prinzip:**  
Wird ein Platz in der Haupt-Hash-Tabelle nicht gefunden (aufgrund zu vieler Kollisionen), so werden die kollidierenden Elemente in einem separaten Überlaufbereich gespeichert.

**Funktionsweise:**
- **Speicherung:** Elemente, die in der Haupttabelle keinen freien Platz finden, werden in einem zusätzlichen Speicherbereich abgelegt.
- **Suche:** Beim Suchen wird zuerst in der Haupttabelle und dann im Überlaufbereich nach dem Schlüssel gesucht.

**Beispiel:**  
Bei einer Tabelle mit 10 Plätzen werden überschüssige Elemente, wenn alle vorgesehenen Positionen belegt sind, im Überlaufbereich abgelegt.

