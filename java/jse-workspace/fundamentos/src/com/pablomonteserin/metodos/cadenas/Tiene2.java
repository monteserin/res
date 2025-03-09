package com.pablomonteserin.metodos.cadenas;

public class Tiene2 {

	public static void main(String[] args) {
		Tiene2 l = new Tiene2();
		boolean tiene = l.tieneLetra("Laura","l");
		System.out.println(tiene);
	}

	public boolean tieneLetra(String txt, String letra) {
		if (txt.toUpperCase().indexOf(letra.toUpperCase())>= 0) {
			return true;
		}else {
			return false;
		}
	}
}
