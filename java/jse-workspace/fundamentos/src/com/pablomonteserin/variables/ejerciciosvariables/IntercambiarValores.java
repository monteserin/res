package com.pablomonteserin.variables.ejerciciosvariables;

public class IntercambiarValores {

	public static void main(String[] args) {
		int a = 5;
		int b = 7;
		
		int c = a;
		a = b;
		b = c;
		
		System.out.println(a); //Deber�a mostrar 7
		System.out.println(b); //Deber�a mostrar 5

	}

}
