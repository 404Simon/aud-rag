---
title: Externes Sortieren Überblick  
description: Verfahren zur Sortierung großer Datenmengen, die nicht vollständig im Hauptspeicher geladen werden können.  
tags:
    - Externes Sortieren
    - große Datenmengen
    - Algorithmus
    - Datenmanagement
---

# Externes Sortieren: Überblick

**Motivation:**  
Wenn die zu sortierenden Daten die Kapazität des Hauptspeichers überschreiten, kommen externe Sortierverfahren zum Einsatz.

**Ansätze:**  
- **Horizontales Zerlegen:**  
  Zerlege die Datei in kleinere Teilmengen, sortiere jede intern und füge die Teillösungen anschließend zusammen.

- **Vertikales Zerlegen:**  
  Teile die Datensätze in Schlüssel und Restdaten auf, sortiere nur die Schlüssel und kombiniere sie dann wieder mit den Restdaten.

**Vorteile:**  
Diese Verfahren ermöglichen es, sehr große Datenmengen zu sortieren, ohne den Hauptspeicher zu überlasten.

