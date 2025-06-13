---
title: Löschen in AVL-Bäumen
description: Erfahre, wie das Löschen eines Knotens in AVL-Bäumen erfolgt und welche Rotationen zur Wiederherstellung der Balance nötig sind.
tags:
    - AVL-Baum
    - Löschen
    - Rotation
    - Balancierung
---

# Löschen in AVL-Bäumen

Beim **Löschen** in einem AVL-Baum werden zunächst die Schritte des BST-Löschens durchgeführt (ggf. Austausch mit Inorder-Nachfolger/Vorgänger). Danach muss der Baum entlang des Einfüge-/Löschpfads erneut balanciert werden.

**Vorgehen:**
1. Finde und entferne den Knoten wie im BST.
2. Prüfe entlang des Pfades zur Wurzel, ob ein Knoten einen Balancefaktor außerhalb des erlaubten Bereichs aufweist.
3. Führe gegebenenfalls eine oder mehrere **Rotationen** (LL, LR, RL, oder deren Spiegelbilder) durch, um die AVL-Eigenschaft wiederherzustellen.

Je nach Balancefaktor können unterschiedliche Rotationsstrategien zum Einsatz kommen.

