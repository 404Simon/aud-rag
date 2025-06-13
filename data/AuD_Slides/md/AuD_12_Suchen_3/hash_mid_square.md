---
title: Mid-Square Methode
description: Erklärung der Mid-Square Methode, bei der der Schlüssel quadriert und der mittlere Teil des Ergebnisses als Hash-Wert verwendet wird.
tags:
    - Hashing
    - Mid-Square
    - Hash-Funktion
    - Algorithmus
---

# Mid-Square Methode

**Prinzip:**  
1. Quadriere den Schlüssel `k`.  
2. Extrahiere den mittleren Teil des Quadrats.  
3. Der extrahierte Wert dient als Hash-Wert.

**Schritte (Beispiel):**
- Wenn `k = 1234`, dann:
  - Quadriere: `1234² = 1522756`
  - Extrahiere den mittleren Abschnitt (z. B. `227`)
  - Nutze diesen Wert (ggf. modulo TableSize) als Index.

**Hinweis:**  
Die Methode zur Extraktion des mittleren Teils kann je nach Implementierung variieren.

