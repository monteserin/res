package com.pablomonteserin.comparacionesycolecciones;

import java.util.Collection;
import java.util.HashMap;
import java.util.Iterator;
import java.util.Map;
import java.util.Set;

public class D_colocarYRecuperarElementosOrdenadosDeUnMap {
	public static void main(String[] args) {
		Persona2 persona1 = new Persona2("75367834E", "Nombre1");
		Persona2 persona2 = new Persona2("68274736E", "Nombre2");
		Persona2 persona3 = new Persona2("90497589E", "Nombre3");
		
		Map map = new HashMap();
		map.put(persona1.getDni(), persona1);
		map.put(persona2.getDni(), persona2);
		map.put(persona3.getDni(), persona3);
		
		Set set = map.keySet();
		
		Iterator it = set.iterator();
		Persona2 persona = null;
		while(it.hasNext()){
			String clave = (String) it.next();
			persona = (Persona2) map.get(clave);
			System.out.println(persona.getNombre());
		}
	}
}

class Persona2{
	private String dni;
	private String nombre;
	public Persona2(String dni, String nombre) {
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
	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + ((nombre == null) ? 0 : nombre.hashCode());
		return result;
	}
}
