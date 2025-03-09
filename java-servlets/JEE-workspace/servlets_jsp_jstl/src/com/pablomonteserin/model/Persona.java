package com.pablomonteserin.model;

public class Persona {
	private String dni;
	private String nombre;
	private String direccion;
	
	public Persona(String dni, String nombre, String direccion){
		this.dni = dni;
		this.nombre = nombre;
		this.direccion = direccion;
		
	}
	public Persona() {
		super();
		this.dni = "74836472";
		this.nombre = "Rodolfo";
		this.direccion = "C/ Los Rosales";
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
	public String getDireccion() {
		return direccion;
	}
	public void setDireccion(String direccion) {
		this.direccion = direccion;
	}
	
	
}
