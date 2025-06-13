---
title: Einfluss der Eingabelänge auf die Laufzeit
description: Erklärt, wie die Größe der Eingabedaten den Laufzeitaufwand eines Algorithmus beeinflusst.
tags:
  - Eingabelänge
  - Laufzeit
  - Algorithmen
---

# Einfluss der Eingabelänge auf die Laufzeit

Die Laufzeit T(n) eines Algorithmus setzt sich oft aus mehreren Komponenten zusammen, deren Dominanz sich mit wachsender Eingabengröße ändert.

## Beispiel:
- **Funktion:** T(n) = 100·n + n² + (exponentieller Anteil)
  - **Kleine n (< 100):** Linearer Anteil dominiert.
  - **Mittlere n (zwischen 100 und 10.000):** Quadratischer Anteil wird spürbar.
  - **Große n (> 10.000):** Ein eventuell vorhandener exponentieller Term gewinnt an Bedeutung.
- **Fazit:** Ohne exakte Kenntnis von T(n) ist eine allgemeine Aussage schwierig – die Eingabelänge ist entscheidend.

