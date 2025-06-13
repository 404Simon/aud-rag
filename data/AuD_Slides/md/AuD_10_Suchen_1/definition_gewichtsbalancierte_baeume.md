---
title: Definition von gewichtsbalancierten Bäumen (BB-Bäume)
description: Lerne die Grundlagen von gewichtsbalancierten Bäumen kennen, bei denen die Knotenzahl der Unterbäume zur Balancierung herangezogen wird.
tags:
    - Gewichtsbalancierte Bäume
    - BB-Baum
    - Balancierung
    - Algorithmus
---

# Definition von gewichtsbalancierten Bäumen (BB-Bäume)

Ein **gewichtsbalancierter Baum** (auch **BB-Baum**) definiert die Balance nicht anhand der Höhe, sondern anhand der **Anzahl der Knoten** in den Unterbäumen.

**Definition:**
- Sei \( n \) die Anzahl der Knoten des Baums und \( n_l \) die Anzahl der Knoten im linken Unterbaum.
- Ein Baum heißt **BB(α)**, wenn für jeden Unterbaum gilt, dass die Differenz der Knotenzahlen der Unterbäume durch einen Faktor \( \alpha \) beschränkt ist.

**Wahl des Parameters \( \alpha \):**
- \( \alpha = 0.5 \): Nur vollständig ausgeglichene Bäume.
- Praktischer Wert: \( \alpha \approx 0.3 \) führt zu einer guten Balance zwischen Aufwand und Baumdegeneration.

