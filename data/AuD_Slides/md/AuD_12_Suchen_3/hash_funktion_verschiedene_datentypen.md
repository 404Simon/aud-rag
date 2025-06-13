---
title: Hash-Funktionen für verschiedene Datentypen
description: Überblick über die Anpassung von Hash-Funktionen für unterschiedliche Datentypen wie Ganzzahlen, Fließkommazahlen und Zeichenketten.
tags:
    - Hashing
    - Datentypen
    - Hash-Funktion
    - Algorithmus
---

# Hash-Funktionen für verschiedene Datentypen

**Anpassungen:**
- **Ganzzahlen:** Direkte Anwendung der Hash-Funktion (z. B. Modulo).
- **Fließkommazahlen:** Kombination von Mantisse und Exponent, um eine Ganzzahl zu erzeugen.
- **Zeichenketten:** Verwendung der ASCII-/Unicode-Werte einzelner Zeichen (z. B. Summierung, Divisionsmethode).

**Beispiel:**  
Bei Zeichenketten kann z. B. die Folding-Methode angewandt werden, um den Schlüssel in Teile zu zerlegen und diese zu addieren.

