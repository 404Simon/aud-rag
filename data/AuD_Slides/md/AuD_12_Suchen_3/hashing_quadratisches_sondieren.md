---
title: Quadratisches Sondieren
description: Erklärung des quadratischen Sondierens, einer Methode zur effizienten Kollisionsbehandlung in Hash-Tabellen.
tags:
    - Hashing
    - Quadratisches Sondieren
    - Kollisionsbehandlung
    - Algorithmus
---

# Quadratisches Sondieren

**Prinzip:**  
Anstelle von linear aufeinanderfolgenden Schritten wird die Schrittweite quadratisch erhöht.

**Algorithmus (Schritt für Schritt):**
1. **Start:** Berechne `i = h(key)`.
2. **Prüfung:** Ist Position `i` frei? Falls nein:
3. **Berechnung:** Nutze die Formel `i = (h(key) + j^2) mod TableSize` für `j = 1, 2, 3, …`.
4. **Einfügen:** Sobald eine freie Position gefunden wird, wird der Schlüssel dort gespeichert.

**Beispiel:**  
Mit `h(key) = key mod 10` und Schlüssel 22:
- Startindex: 22 mod 10 = 2.
- Falls belegt: Prüfe `(2 + 1^2) mod 10 = 3`, `(2 + 2^2) mod 10 = 6`, usw.

