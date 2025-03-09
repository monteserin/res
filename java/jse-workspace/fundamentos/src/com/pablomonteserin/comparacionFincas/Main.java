package com.pablomonteserin.comparacionFincas;

import java.util.ArrayList;
import java.util.Collection;
import java.util.Collections;
import java.util.Iterator;
import java.util.List;
import java.util.Map;
import java.util.Map.Entry;
import java.util.TreeMap;
import java.util.TreeSet;

public class Main {
	public static void main(String[] args) {		
		Finca d1 = new Finca("finca1", 4, 5);
		Finca d2 = new Finca("finca2", 5, 4);
		Finca d3 = new Finca("finca3", 2, 15);
		Finca d4 = new Finca("finca4", 16, 2);
		Finca d5 = new Finca("finca5", 2, 20);
		Finca d6 = new Finca("finca6", 21, 2);
		Finca d7 = new Finca("finca7", 3,22);
		Finca d8 = new Finca("finca8", 22, 3);
		Finca d9 = new Finca("finca9", 4, 23);
		Finca d10 = new Finca("finca10", 24, 4);
		
		List lista = new ArrayList();
		lista.add(d10);
		lista.add(d8);
		lista.add(d6);
		lista.add(d4);
		lista.add(d2);
		lista.add(d9);
		lista.add(d7);
		lista.add(d5);
		lista.add(d3);
		lista.add(d1);

		
		if(d1.equals(d2))System.out.println("Éxito1");
		if(d2.equals(d1))System.out.println("Éxito2");
		
		Collections.sort(lista);

		Iterator it = lista.iterator();
		while(it.hasNext()){
			Finca c = (Finca) it.next();
			System.out.println(c.getNombre());
		}
	}
}
