---
title: Kollisionsbehandlung Verkettete Überläufer (Chaining)
description: Detaillierte Erklärung der Methode "Verkettete Überläufer" zur Behandlung von Kollisionen in Hash-Tabellen.
tags:
    - Hashing
    - Kollision
    - Chaining
    - Datenstruktur
---

# Kollisionsbehandlung: Verkettete Überläufer (Chaining)

Beim **Verketteten Überläufer** wird jeder Eintrag in der Hash-Tabelle als Kopf einer verketteten Liste genutzt. Alle Elemente, die denselben Hash-Wert besitzen, werden in dieser Liste zusammengeführt.

**Vorgehensweise:**
- **Einfügen:** Berechne den Hash-Wert. Ist an dieser Stelle bereits ein Element, hänge den neuen Schlüssel an die Liste.
- **Suchen:** Berechne den Hash-Wert und durchsuche die zugehörige Liste.
- **Löschen:** Finde den Schlüssel in der Liste und entferne ihn.

**Beispiel:**
Mit `h(key) = key mod 10` werden die Schlüssel 22 und 32 beide an Index 2 gespeichert und als Liste abgelegt.

