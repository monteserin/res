package com.pablomonteserin.encapsulamientoyherencia;

public class C_modifPropSinEncapsulamiento {

	String nombre = "Pepe";
	public static void main(String[] args) {
		C_modifPropSinEncapsulamiento a_recPropMal = new C_modifPropSinEncapsulamiento();
		a_recPropMal.nombre = "Rodolfo";
		System.out.println(a_recPropMal.nombre);
	}
}

