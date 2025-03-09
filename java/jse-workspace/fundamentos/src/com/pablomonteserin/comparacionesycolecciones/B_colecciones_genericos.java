package com.pablomonteserin.comparacionesycolecciones;

import java.util.ArrayList;
import java.util.Iterator;

public class B_colecciones_genericos {

	public static void main(String[] args) {
		ArrayList <String>arrayList = new ArrayList<String>();
		arrayList.add("vaca");
		arrayList.add("perro");
		arrayList.add("elefante");
		Iterator<String> it = arrayList.iterator();
		while(it.hasNext()){
			String cadena =it.next();
			System.out.println(cadena);
		}
	}
}


