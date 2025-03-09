package com.pablomonteserin.comparacionDepositos;

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
		Deposito d1 = new Deposito("deposito1", 1, 2,3);
		Deposito d2 = new Deposito("deposito2", 3, 3,1);
		Deposito d3 = new Deposito("deposito3", 2, 2,3);
		Deposito d4 = new Deposito("deposito4", 4,3, 2);
		Deposito d5 = new Deposito("deposito5", 5, 4,3);
		Deposito d6 = new Deposito("deposito6", 3, 6, 6);
		Deposito d7 = new Deposito("deposito7", 4,7,6);
		Deposito d8 = new Deposito("deposito8", 5, 8,8);
		Deposito d9 = new Deposito("deposito9", 8,9, 9);
		Deposito d10 = new Deposito("deposito10", 9, 10,12);
		
		List<Deposito> lista = new ArrayList<Deposito>();
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
			Deposito c = (Deposito) it.next();
			System.out.println(c.getNombre());
		}
	}
}
