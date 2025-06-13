---
title: Perfektes Hashing und Kollisionen
description: Erklärung, was perfektes Hashing bedeutet und wie Kollisionen in Hash-Tabellen entstehen.
tags:
    - Hashing
    - Kollision
    - Hash-Funktion
    - Algorithmus
---

# Perfektes Hashing und Kollisionen

**Perfektes Hashing:**  
Liegt vor, wenn jeder Schlüssel einen eindeutigen Platz in der Tabelle erhält und somit keine Kollisionen entstehen. In der Praxis ist dies selten umsetzbar.

**Kollision:**  
Tritt auf, wenn zwei unterschiedliche Schlüssel denselben Hash-Wert (Index) ergeben. Dadurch müssen beide an derselben Position gespeichert werden.

**Beispiel:**  
Verwendet man `h(key) = key mod 5`, so führen beispielsweise die Schlüssel 7 und 12 zu:

- `7 mod 5 = 2`
- `12 mod 5 = 2`

Beide würden den gleichen Platz (Index 2) belegen.

