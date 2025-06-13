---
title: Algorithmus
description: Ein Algorithmus ist eine exakte Abfolge von Anweisungen zur Lösung eines Problems, die von einem Computer ausgeführt werden kann.
tags:
   - Algorithmus
   - Problemlösung
   - Programmierung
---

# Algorithmus

Ein Algorithmus ist eine präzise formulierte Arbeitsanleitung zur Lösung eines Problems, die von einem Computer ausgeführt werden kann.

Beispiele für Algorithmen im Alltag:
- Ein Kochrezept
- Eine Bauanleitung
- Spielregeln

Merkmale eines Algorithmus:
- Besteht aus einer **endlichen Anzahl** von Schritten
- Hat eine **eindeutige Reihenfolge**
- Kann bedingte Anweisungen enthalten (z. B. "wenn-dann")
- Kann Schleifen enthalten (z. B. "wiederhole solange")

## Beschreibungsformen

Es gibt mehrere Möglichkeiten, Algorithmen darzustellen:

1. **Umgangssprachliche Beschreibung**
   - Beispiel: "Addiere alle Zahlen von 1 bis n und gib das Ergebnis aus."

2. **Programmablaufpläne (Flussdiagramme)**
   - Grafische Darstellung der Ablauflogik mit Symbolen für Entscheidungen und Prozesse.

3. **Struktogramme (Nassi-Shneiderman-Diagramme)**
   - Alternative grafische Darstellung, häufig kompakter als Flussdiagramme.

4. **Programmiersprachen**
   - Direkte Umsetzung eines Algorithmus in ausführbaren Code.
   - Beispiel in Java:
   ```java
   int sum = 0;
   for (int i = 1; i <= n; i++) {
       sum += i;
   }
   System.out.println(sum);
   ```

## Eigenschaften von Algorithmen

Ein Algorithmus muss bestimmte Eigenschaften aufweisen, um korrekt und effizient zu funktionieren.

1. **Eindeutigkeit**: Jeder Schritt ist genau definiert und führt immer zum gleichen Ergebnis.
2. **Parametrisierbarkeit**: Der Algorithmus kann mit unterschiedlichen Eingabewerten arbeiten.
3. **Finitheit**: Der Algorithmus besteht aus endlich vielen Schritten.
4. **Ausführbarkeit**: Alle Anweisungen müssen prinzipiell durchführbar sein.
5. **Terminierung**: Der Algorithmus hält nach endlich vielen Schritten an.
6. **Determiniertheit**: Bei gleichen Eingaben liefert der Algorithmus immer das gleiche Ergebnis.
7. **Determinismus**: Zu jedem Zeitpunkt gibt es höchstens eine Fortsetzung der Berechnung.

