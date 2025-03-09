package com.pablomonteserin.comparacionesycolecciones;

import java.util.ArrayList;
import java.util.Iterator;

public class B_colecciones {

	public static void main(String[] args) {
		ArrayList arrayList = new ArrayList();
		arrayList.add("vaca");
		arrayList.add("perro");
		arrayList.add("elefante");
		Iterator it = arrayList.iterator();
		while(it.hasNext()){
			String cadena =(String) it.next();
			System.out.println(cadena);
		}
	}
}


