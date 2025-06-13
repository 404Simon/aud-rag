---
title: Optimale Ordnung und Plattenzugriffe (mit Lösung)
description: Berechne die optimale Ordnung eines B‑Baums bei gegebener Blockgröße und Datensatzgrößen, und ermittle die Plattenzugriffe – Lösung mit korrekten Formeln und Tabellen.
tags:
    - B‑Bäume
    - Ordnung
    - Plattenzugriffe
    - Übung
    - Lösung
    - Datenstrukturen
---

# Aufgabe 3: Optimale Ordnung und Plattenzugriffe (mit Lösung)

**Gegeben:**
- **Blockgröße (b):** 8 kB = 8192 Byte  
- **Schlüsselgröße (s):** 16 Byte  
- **Restdaten (d):** 400 Byte  
- **Zeigergröße (z):** 8 Byte

**Aufgabenstellung:**  
1. Berechne die optimale Ordnung eines B‑Baums.  
2. Bestimme für verschiedene Datenmengen (1.000, 10.000, 100.000, 1.000.000, 2.000.000, 5.000.000, 10.000.000) die maximale Anzahl an Plattenzugriffen.  
3. Erkläre, wie sich Ordnung und Zugriffe bei Einsatz eines B*-Baums verändern.

---

## Schritt 1: Berechnung der optimalen Ordnung für einen B‑Baum

Die Anzahl der Einträge pro Knoten \( x \) wird berechnet mit:
\[
x = \left\lfloor \frac{b + z}{z + s + d} \right\rfloor
\]

Einsetzen der Werte:
- **Numerator:** \( b + z = 8192 + 8 = 8200 \)  
- **Denominator:** \( z + s + d = 8 + 16 + 400 = 424 \)

\[
x = \left\lfloor \frac{8200}{424} \right\rfloor \approx \lfloor 19,33 \rfloor = 19
\]

Da ein Knoten in einem B‑Baum der Ordnung \( m \) zwischen \( m \) und \( 2m \) Schlüssel enthalten soll, gilt:
\[
2m \leq 19 \quad\Rightarrow\quad m = 9 \quad(\text{da } 2 \times 9 = 18)
\]

**Schlussfolgerung:**  
- **Optimale Ordnung des B‑Baums:** \( m = 9 \)  
- **Minimale Kinderzahl:** \( m + 1 = 10 \)

---

## Schritt 2: Abschätzung der maximalen Plattenzugriffe

Die Baumhöhe \( h \) (worst-case) lässt sich grob abschätzen mit:
\[
n \approx (m+1)^{(h-1)}
\]
Für \( m+1 = 10 \) ergibt sich beispielsweise:

| Datensätze   | Baumhöhe \( h \) (ca.) |
|--------------|------------------------|
| 1.000        | 4                      |
| 10.000       | 5                      |
| 100.000      | 6                      |
| 1.000.000    | 7                      |
| 2.000.000    | 7                      |
| 5.000.000    | 8                      |
| 10.000.000   | 8                      |

Die Anzahl der Plattenzugriffe entspricht in etwa der Baumhöhe.

---

## Schritt 3: Vergleich mit einem B*-Baum

Bei einem B*-Baum speichern innere Knoten nur Schlüssel, was den Platzbedarf reduziert. Die Formel für innere Knoten lautet:
\[
x^* = \left\lfloor \frac{b + z}{z + s} \right\rfloor
\]

Einsetzen:
- **Numerator:** \( 8200 \) (wie oben)  
- **Denominator:** \( z + s = 8 + 16 = 24 \)

\[
x^* = \left\lfloor \frac{8200}{24} \right\rfloor \approx \lfloor 341,67 \rfloor = 341
\]

Damit gilt für die Ordnung:
\[
2m^* \approx 341 \quad\Rightarrow\quad m^* = \lfloor 341/2 \rfloor = 170
\]
- **Minimale Kinderzahl:** \( m^* + 1 = 171 \)

**Auswirkung:**  
- Die sehr hohe Anzahl an Kindern reduziert die Baumhöhe erheblich.  
- Beispielsweise könnte ein Baum mit 1.000.000 Datensätzen nur etwa 4 Ebenen (statt 7) haben, was zu deutlich weniger Plattenzugriffen führt.

---

*Fazit:*  
- **B‑Baum:** Optimale Ordnung \( m = 9 \) führt zu Baumhöhen von 4 bis 8 bei den genannten Datenmengen.  
- **B*-Baum:** Durch Speicherung von nur Schlüsseln in den inneren Knoten (optimale Ordnung \( m^* \approx 170 \)) sinkt die Baumhöhe drastisch, wodurch deutlich weniger Plattenzugriffe notwendig sind.

