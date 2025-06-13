---
title: Kollisionsbehandlung Sondierung (Probing)
description: Erklärung der Sondierungsmethoden zur Behandlung von Kollisionen in Hash-Tabellen mittels offener Adressierung.
tags:
    - Hashing
    - Probing
    - Kollisionsbehandlung
    - Datenstruktur
---

# Kollisionsbehandlung: Sondierung (Probing)

Beim **Sondieren** (auch Open Addressing genannt) wird nach einer Kollision eine alternative Position in der Tabelle gesucht.

**Wichtige Sondierungsstrategien:**
- **Lineares Sondieren:** Prüft nacheinander benachbarte Positionen.
- **Quadratisches Sondieren:** Nutzt quadratische Schritte (z. B. +1², +2², …) zur Suche.
- **Doppeltes Hashing:** Verwendet eine zweite Hash-Funktion zur Berechnung der Schrittweite.

**Beispiel (Lineares Sondieren):**
Ist an Index 2 (berechnet mit `h(key) = key mod 10`) bereits ein Element, wird Index 3, dann 4 usw. geprüft, bis eine freie Position gefunden wird.

