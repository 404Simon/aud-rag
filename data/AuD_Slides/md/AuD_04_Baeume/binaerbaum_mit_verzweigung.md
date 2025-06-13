---
title: Binärbaum mit Verzeigerungen
description: Klassische Implementierung eines Binärbaums mittels Zeigern auf linke und rechte Nachfolger – häufig mit optionalen Rückverweisen.
tags:
    - Binärbaum
    - Zeiger
    - Datenstruktur
    - Implementierung
---

# Binärbaum mit Verzeigerungen

Bei dieser Darstellung enthält jeder Knoten:
- Einen **Schlüssel** und zugehörige Daten.
- Zwei Zeiger, die auf den **linken** und **rechten** Nachfolger verweisen.
- Optional einen **Rückzeiger** zum Elternknoten, falls die Navigation von Blättern zur Wurzel benötigt wird.

**Beispiel (Pseudocode):**
```c
struct Node {
    int key;
    Node* left;
    Node* right;
    Node* parent; // optional
};
```

