---
title: Entropie in der Codierung
description: Beschreibt den mittleren Informationsgehalt pro Zeichen, erklärt die mathematische Formel und gibt praxisnahe Beispiele.
tags:
    - Entropie
    - Informationsgehalt
    - Codierung
    - Statistik
---

# Entropie in der Codierung

**Entropie** misst den durchschnittlichen Informationsgehalt pro Zeichen einer Quelle.  
Formal:  
\[ H(X) = - \sum_{x \in X} p(x) \cdot \log_2(p(x)) \]

*Erklärungs-Schritte:*
1. **Wahrscheinlichkeiten erfassen:** Jedes Zeichen x hat eine Wahrscheinlichkeit p(x).
2. **Berechnung:** Multipliziere p(x) mit \(\log_2(p(x))\) und summiere über alle Zeichen. Das Minuszeichen sorgt für einen positiven Wert.
3. **Beispiele:**  
   - Bei gleichverteilten Zeichen (z. B. 26 Buchstaben) ist H maximal (ca. log₂26 ≈ 4,7).  
   - Für die deutsche Sprache liegt H typischerweise um 4,1.

