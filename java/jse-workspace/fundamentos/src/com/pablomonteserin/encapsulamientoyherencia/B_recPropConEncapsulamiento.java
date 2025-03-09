package com.pablomonteserin.encapsulamientoyherencia;

public class B_recPropConEncapsulamiento {

	private String nombre = "Pepe";
	
	public String getNombre(){
		return this.nombre;
	}
	
	public static void main(String[] args) {
		B_recPropConEncapsulamiento b_recPropEncapsulamiento = new B_recPropConEncapsulamiento();
		System.out.println(b_recPropEncapsulamiento.getNombre());
	}
}
