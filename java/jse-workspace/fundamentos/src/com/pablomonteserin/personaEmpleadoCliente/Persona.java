package com.pablomonteserin.personaEmpleadoCliente;

public class Persona {
	private String nombre;
	private String direccion;
	private String edad;
	static int numInstancias;
	
	public Persona() {
		super();
		numInstancias++;
	}
	
	public static int getInstancias() {
		return numInstancias;
	}
}
