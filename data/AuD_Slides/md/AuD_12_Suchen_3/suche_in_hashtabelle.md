---
title: Suchen in Hash-Tabellen
description: Schrittweise Erklärung, wie in Hash-Tabellen gesucht wird – inklusive Nutzung von Sondierungsketten und verketteten Listen.
tags:
    - Hashing
    - Suchen
    - Algorithmus
    - Datenstruktur
---

# Suchen in Hash-Tabellen

**Vorgehen:**
1. Berechne den Hash-Wert des gesuchten Schlüssels.
2. Greife auf die entsprechende Position in der Hash-Tabelle zu.
3. Falls dort mehrere Elemente gespeichert sind (etwa durch Chaining oder Sondierung), suche entlang der Sondierungskette bzw. in der Liste.

**Beispiel:**  
Bei linearem Sondieren wird, beginnend beim berechneten Index, jede Position geprüft, bis der gesuchte Schlüssel gefunden wird.

