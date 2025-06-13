---
title: Binärbaum als Feld
description: Darstellung eines Binärbaums in einem Array – Mithilfe spezieller Indexierungsregeln lassen sich Eltern und Nachfolger leicht ermitteln.
tags:
    - Binärbaum
    - Array
    - Datenstruktur
    - Traversierung
---

# Binärbaum als Feld

**Prinzip:**  
- Ein Binärbaum der Höhe \( h \) hat maximal \( 2^h - 1 \) Knoten.
- Bei einer **reihenweisen Traversierung** wird der \( i \)-te Knoten an der Position \( i \) im Array gespeichert.

**Navigation:**  
- **Elternknoten:** \( \text{Feld}[i \, \text{div} \, 2] \)  
- **Linker Nachfolger:** \( \text{Feld}[2 \times i] \)  
- **Rechter Nachfolger:** \( \text{Feld}[2 \times i + 1] \)

**ASCII-Beispiel:**
```
         [1]
        /   \
      [2]   [3]
     /  \   /  \
   [4] [5] [6] [7]
```

