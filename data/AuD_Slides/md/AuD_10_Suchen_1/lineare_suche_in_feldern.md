---
title: Lineare Suche in Feldern
description: Erlerne die lineare Suche – eine einfache Methode, um unsortierte Felder durch sequentielles Vergleichen zu durchsuchen.
tags:
    - Lineare Suche
    - Algorithmus
    - Feld
    - Vergleich
---

# Lineare Suche in Feldern

Bei der **linearen Suche** wird jedes Element eines Feldes nacheinander überprüft, bis das gesuchte Element gefunden oder das Feld vollständig durchsucht wurde.

**Schlüsselkonzepte:**
- **Best Case:** Gesuchtes Element befindet sich an erster Stelle → **O(1)**
- **Worst Case:** Element steht am Ende oder fehlt → **O(n)**
- **Average Case:** Etwa n/2 Vergleiche nötig → **O(n)**

**Ablauf:**
1. Beginne beim ersten Element.
2. Vergleiche jedes Element mit dem Suchbegriff.
3. Stoppe, wenn eine Übereinstimmung gefunden wird oder das Ende erreicht ist.

Beispiel:
```plaintext
Feld: [23, 66, 42, 11, 5, 69, 77, 55, 16]
Suche: 42

Vergleiche: 23 → 66 → 42 (gefunden)
```

