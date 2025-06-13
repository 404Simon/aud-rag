---
title: Übung 3 – Fibonacci-Bäume analysieren
description: Detaillierte Lösung zur Bestimmung der Knotenzahl in Fibonacci-Bäumen, Zeichnen des Fibonacci-Baums der Höhe 4 und Bestimmung der Anzahl verschiedener Strukturen.
tags:
    - Übung
    - Fibonacci-Baum
    - Baum
    - Lösung
---

# Übung 3 – Fibonacci-Bäume

**Aufgabenstellung:**  
a) Wie viele Knoten hat ein Fibonacci-Baum der Höhe \( n \)?  
b) Zeichne alle verschiedenen Fibonacci-Bäume der Höhe 4!  
c) Wie viele verschiedene Fibonacci-Bäume der Höhe \( n \) gibt es?

## a) Anzahl der Knoten in einem Fibonacci-Baum

**Schritt 1: Definition und Rekursion**  
- Ein Fibonacci-Baum \( F(0) \) (Höhe 0) sei leer (0 Knoten) oder definiert als einzelner Knoten.  
- Ein Fibonacci-Baum \( F(1) \) (Höhe 1) besteht aus einem Knoten.

**Schritt 2: Rekursive Formel**  
Für \( n \ge 2 \):
\[
K(n) = 1 + K(n-1) + K(n-2)
\]
mit den Anfangswerten:  
\( K(1) = 1 \) und \( K(0) = 0 \).

**Schritt 3: Beispielrechnung**  
- \( K(2) = 1 + K(1) + K(0) = 1 + 1 + 0 = 2 \)  
- \( K(3) = 1 + K(2) + K(1) = 1 + 2 + 1 = 4 \)  
- \( K(4) = 1 + K(3) + K(2) = 1 + 4 + 2 = 7 \)

**Ergebnis:**  
Ein Fibonacci-Baum der Höhe 4 hat **7 Knoten**.

## b) Zeichne den Fibonacci-Baum der Höhe 4

**Schritt 1: Rekursive Konstruktion**  
- \( F(4) \) besteht aus einer Wurzel, einem linken Teilbaum \( F(3) \) und einem rechten Teilbaum \( F(2) \).  
- Wir haben: \( K(3) = 4 \) und \( K(2) = 2 \).

**Schritt 2: Zeichnung (ASCII-Diagramm)**  
```plaintext
         ●           ← Wurzel
        / \
     F(3)  F(2)
     
F(3):
         ●
        / \
     F(2)  F(1)

F(2):
       ●
      / \
   F(1)  (leer)

F(1):
       ●
```
Dies führt zu einer eindeutigen Struktur, die z. B. so dargestellt werden kann:
```plaintext
         ●
        / \
       ●   ●
      / \
     ●   ●
    /
   ●
```
*Hinweis:* Aufgrund der strikten rekursiven Definition gibt es nur **eine** Struktur pro Höhe.

## c) Anzahl der verschiedenen Fibonacci-Bäume

**Schritt 1:**  
Da der Aufbau eines Fibonacci-Baums für eine gegebene Höhe \( n \) strikt vorgegeben ist (nämlich \( F(n) \) besteht genau aus \( F(n-1) \) und \( F(n-2) \)), existiert **nur eine eindeutige Struktur**.

**Ergebnis:**  
Es gibt **genau 1** Fibonacci-Baum für jede Höhe \( n \).

**Fazit:**  
- (a) Ein Fibonacci-Baum der Höhe 4 hat 7 Knoten.  
- (b) Der Baum der Höhe 4 wird rekursiv aus \( F(3) \) und \( F(2) \) aufgebaut.  
- (c) Es existiert nur **eine** Struktur pro Höhe.

