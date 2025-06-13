---
title: Praktische Implementierung und Laufzeitanalyse  
description: Darstellung von Experimenten zur Laufzeitmessung der Sortieralgorithmen anhand verschiedener Datensatzgrößen und Hardwareplattformen.  
tags:
    - Implementierung
    - Laufzeitanalyse
    - Performance
    - Sortieralgorithmen
---

# Praktische Implementierung und Laufzeitanalyse

**Experimentelles Setup:**  
- Es wurden Arrays mit unterschiedlichen Größen (z. B. 10.000 bis 100.000 Elemente) verwendet.  
- Messungen erfolgten auf zwei Hardwareplattformen:  
  - Älterer Laptop (Intel 2.2 GHz, 256 MB RAM)  
  - Moderner Laptop (Intel Core i7 2.8 GHz, 32 GB RAM)

**Untersuchte Algorithmen:**  
- Bubble Sort (mit und ohne Wächter)  
- Selection Sort  
- Insertion Sort (mit und ohne Wächter)

**Schlüsse aus den Ergebnissen:**  
- **Quadratisches Verhalten:** Alle Algorithmen zeigen bei großen Datensätzen eine quadratische Laufzeit, auch wenn die Konstanten variieren.  
- **Optimierungseffekte:**  
  - Bei Bubble Sort brachte die Einführung eines Wächter-Flags wenig bis keine Verbesserung – teils sogar eine Verschlechterung aufgrund des Verwaltungsaufwands.  
  - Insertion Sort profitiert deutlich von einer vorliegenden Vorsortierung und läuft im Best-Case sogar linear.
- **Hardware-Einfluss:**  
  - Verbesserte Hardware führt zu niedrigeren absoluten Laufzeiten, ändert aber das qualitative Verhalten (also die O(n²)-Charakteristik) nicht.

**Ergebnisse:**  
Die Messungen zeigten, dass alle Algorithmen ein quadratisches Laufzeitverhalten aufweisen. Dennoch konnten Unterschiede in den absoluten Laufzeiten festgestellt werden, die unter anderem von der Anzahl der durchgeführten Vertauschungen und Vergleiche abhängen.

