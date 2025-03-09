package com.pablomonteserin.encapsulamientoyherencia;

public class D_modifPropConEncapsulamiento {

	private String nombre = "Pepe";
	
	public String getNombre(){
		return this.nombre;
	}
	public void setNombre(String nombre){
		this.nombre = nombre;
	}
	
	public static void main(String[] args) {
		D_modifPropConEncapsulamiento d_modifPropConEncapsulamiento = new D_modifPropConEncapsulamiento();
		d_modifPropConEncapsulamiento.setNombre("Rodolfo");
		System.out.println(d_modifPropConEncapsulamiento.getNombre());
	}
}

