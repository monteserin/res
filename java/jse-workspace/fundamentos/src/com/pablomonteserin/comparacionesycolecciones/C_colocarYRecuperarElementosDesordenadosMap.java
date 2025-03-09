package com.pablomonteserin.comparacionesycolecciones;

import java.util.Collection;
import java.util.HashMap;
import java.util.Iterator;
import java.util.Map;

public class C_colocarYRecuperarElementosDesordenadosMap {

	public static void main(String[] args) {
		Persona persona1 = new Persona("75367834E", "Nombre1");
		Persona persona2 = new Persona("68274736E", "Nombre2");
		Persona persona3 = new Persona("90497589E", "Nombre3");
		
		Map map = new HashMap();
		map.put(persona1.getDni(), persona1);
		map.put(persona2.getDni(), persona2);
		map.put(persona3.getDni(), persona3);
		
		Collection collection = map.values();
		Iterator it = collection.iterator();
		while(it.hasNext()){
			System.out.println(((Persona)it.next()).getNombre());
		}
	}
}

class Persona{
	private String dni;
	private String nombre;
	public Persona(String dni, String nombre) {
		super();
		this.dni = dni;
		this.nombre = nombre;
	}
	public String getDni() {
		return dni;
	}
	public void setDni(String dni) {
		this.dni = dni;
	}
	public String getNombre() {
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	
	
}
