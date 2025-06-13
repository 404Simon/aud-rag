---
title: Übungen zu Hashing – Aufgabe 5 (Wahr/Falsch)
description: Wahr/Falsch-Fragen zu typischen Aussagen über Hashing, die zur Überprüfung des Verständnisses dienen.
tags:
    - Hashing
    - Übung
    - Wahr/Falsch
    - Aufgaben
---

# Übungen zu Hashing – Aufgabe 5 (Wahr/Falsch)

Bewerten Sie die folgenden Aussagen als wahr oder falsch:

1. Eine Hash-Funktion `h(x) = x mod n` arbeitet am besten, wenn *n* eine Primzahl ist.  
2. Ab einem Füllungsgrad von 30% ist das Einfügen in Hash-Tabellen nicht mehr effizient.  
3. Kollisionen können beim Hashing nur entstehen, wenn derselbe Wert zweimal eingefügt werden soll.  
4. Hashing ist gut geeignet, wenn relativ selten gelöscht wird.  
5. Hash-Verfahren sind zum schnellen Suchen stets Baumstrukturen vorzuziehen.  
6. Bei geringer Kollisionswahrscheinlichkeit hat das Einfügen in eine Hash-Tabelle einen Aufwand von O(log₂ n).  
7. Quadratisches Sondieren erleichtert gegenüber linearem Sondieren das Löschen von Einträgen.

**Lösungshinweise:**
- (1) Wahr – Primzahlen verbessern in der Regel die Verteilung.  
- (2) Falsch – Probleme treten erst bei hohem Füllgrad (etwa 80%) auf.  
- (3) Falsch – Unterschiedliche Werte können auch Kollisionen erzeugen.  
- (4) Wahr – Löschvorgänge sind in Hash-Tabellen oft problematisch.  
- (5) Falsch – Hashing ist in der Regel schneller, wenn keine geordnete Suche notwendig ist.  
- (6) Falsch – Bei guter Hash-Funktion liegt der Aufwand idealerweise bei O(1).  
- (7) Falsch – Quadratisches Sondieren kann das Löschen sogar erschweren.

