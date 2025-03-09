package com.pablomonteserin.comparacionesycolecciones;

import java.util.HashMap;
import java.util.Map;

public class E_recorerrerUnMap {
	public static void main(String[] args) {
		Persona3 persona1 = new Persona3("75367834E", "Nombre1");
		Persona3 persona2 = new Persona3("68274736E", "Nombre2");
		Persona3 persona3 = new Persona3("90497589E", "Nombre3");
		
		Map <String,Persona3>map = new HashMap<String,Persona3>();
		map.put(persona1.getDni(), persona1);
		map.put(persona2.getDni(), persona2);
		map.put(persona3.getDni(), persona3);
		
		//Para cada elemento key del conjunto map.keySet()
		for (String key : map.keySet()){
			System.out.println(key + "=> " + map.get(key).getNombre());
		}
		System.out.println("----------------");
		//1 Entry es un key-value pair
		//Para cada elemento entry del conjunto map.entrySet()
		for(Map.Entry<String, Persona3>entry:map.entrySet()){
			String key = entry.getKey();
			Persona3 value = entry.getValue();
			System.out.println(key + "=> " + value.getNombre());
		}
		
	}
}

class Persona3{
	private String dni;
	private String nombre;
	public Persona3(String dni, String nombre) {
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
