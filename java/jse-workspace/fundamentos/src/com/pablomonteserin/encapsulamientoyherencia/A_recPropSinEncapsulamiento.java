package com.pablomonteserin.encapsulamientoyherencia;

public class A_recPropSinEncapsulamiento {
	String nombre = "Pepe";
	public static void main(String[] args) {
		A_recPropSinEncapsulamiento a_recPropMal = new A_recPropSinEncapsulamiento();
		System.out.println(a_recPropMal.nombre);
	}
}

