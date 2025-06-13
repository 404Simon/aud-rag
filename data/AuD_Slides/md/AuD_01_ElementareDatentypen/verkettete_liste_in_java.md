---
title: Verkettete Liste in Java
description: Die verkettete Liste ist eine dynamische Datenstruktur, die in Java über Klassen und Referenzen implementiert wird.
tags:
    - Linked List
    - Java
    - Referenzen
    - Datenstruktur
---

# Verkettete Liste in Java

Java verwendet Referenzen anstelle von Zeigern zur Umsetzung einer verketteten Liste.

- Zelle: Besteht aus Objekt und Zeiger auf folgende Struktur (auch wieder Objekt und Zeiger)

```java
public class Cell<T>{
    T data;
    Cell<T> next;

    public Cell(T o) {data = o;}
}
```

Verwendung von Klasse Cell als innere Klasse zum Aufbau verketteter Liste:

```java
public class VerketteteListe<T> {
    private class Cell<T>{
        ...
    }

    private Cell<T> anchor; // Points to first element

    public void add(T o){
        Cell<T> neu = new Cell<T>(o);
        if (anchor == null){
            // Empty List
            anchor = neu;
            neu.next = null;
        } else {
            // Non-Empty List
            neu.next = anchor;
            anchor = neu;
        }
    }
}
```
