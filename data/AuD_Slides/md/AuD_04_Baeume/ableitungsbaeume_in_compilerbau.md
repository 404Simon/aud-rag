---
title: Ableitungsbäume in Compilerbau
description: Ableitungsbäume (Parse Trees) veranschaulichen die syntaktische Struktur von Ausdrücken in Compilern.
tags:
    - Compilerbau
    - Ableitungsbaum
    - Parse Tree
    - Syntax
---

# Ableitungsbäume in Compilerbau

- **Knoten:**  
  Repräsentieren Symbole – Terminale (z. B. Variablen, Zahlen) und Nichtterminale (Abstraktionen der Grammatik).
- **Kanten:**  
  Stellen Ableitungsregeln dar.
- **Blätter:**  
  Enthalten die **Terminale** des Ausdrucks.

**Beispiel (ASCII-Art):**
```
       [Ausdruck]
         /   \
   [Variable] [Operator]
              /      \
         [Zahl]    [Variable]
```

