package com.pablomonteserin.Collection_Map;

import java.util.ArrayList;
import java.util.Collection;
import java.util.HashMap;
import java.util.Iterator;
import java.util.Map;

public class Map_to_OrdenadtedCollection {
	public static void main(String args[]){
		
		Persona persona1 = new Persona("nombre1", 9);
		Persona persona2 = new Persona("nombre2", 20);
				
/*Convertir una Collection en un Map ********************************/
		Collection col = new ArrayList();
		Map<String, Persona> map = new HashMap();
		col.add(persona1);
		col.add(persona2);
		Iterator<Persona> it = col.iterator();
		while(it.hasNext()){
			Persona p = it.next();
			map.put(p.getNombre(), p);
		}
/********************************************************************/	
/*Convertir un Map en una Collection ********************************/
		Collection <Persona>col2 = map.values();
		Collection keys = map.keySet();
/********************************************************************/	
		Iterator <Persona>it2 = keys.iterator();
		System.out.println("** Recorro la collection de personas **");
		while(it2.hasNext()){
			Persona p= map.get(it2.next());
			System.out.println(p.getNombre());
		}
	}
}
