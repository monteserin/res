package com.pablomonteserin.hashcode;


public class HashCode_sin_sobreescritura extends Exception{
    public static void main(String[] args) {
    	Persona p1 = new Persona("Juan", 16);
    	Persona p2 = new Persona("Juan", 16);

    	System.out.println(p1.hashCode());
    	System.out.println(p2.hashCode());	
    	
    	System.out.println(p1.equals(p2));
    	System.out.println(p1 == p2);
    	System.out.println(p1.hashCode()==p2.hashCode());
    }
}
class Persona{
	private String nombre;
	private int edad;
	
	public Persona(String nombre, int edad) {
		super();
		this.nombre = nombre;
		this.edad = edad;
	}
	public String getNombre() {
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	public int getEdad() {
		return edad;
	}
	public void setEdad(int edad) {
		this.edad = edad;
	}
	
	
}
