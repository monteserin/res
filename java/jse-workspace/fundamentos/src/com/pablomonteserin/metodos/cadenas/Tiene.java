package com.pablomonteserin.metodos.cadenas;

public class Tiene {

	public static void main(String[] args) {
		Tiene2 l = new Tiene2();
		boolean tiene = l.tieneLetra("Laura", "l");
		System.out.println(tiene);
	}

	public boolean tieneLetra(String txt, String letra) {
		if (txt.indexOf(letra) >= 0) {
			return true;
		} else {
			return false;
		}
	}
}
