package com.pablomonteserin.metodos.cadenas;

public class Case2 {

	public static void main(String[] args) {
		Case2 l = new Case2();
		int w =l.indexOfIgnoreCase("Juan", "ua");
		System.out.println(w);
	}

	public int indexOfIgnoreCase(String palabra1, String palabra2) {
		return palabra1.indexOf(palabra2);
	}
}
