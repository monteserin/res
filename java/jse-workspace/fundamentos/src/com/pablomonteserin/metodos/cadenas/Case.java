package com.pablomonteserin.metodos.cadenas;

public class Case {

	public static void main(String[] args) {
		Case l = new Case();
		String w =l.toCase("Juan");
		System.out.println(w);
	}

	public String toCase(String palabra) {
		return palabra.toLowerCase() + " - " + palabra.toUpperCase();
	}
}
