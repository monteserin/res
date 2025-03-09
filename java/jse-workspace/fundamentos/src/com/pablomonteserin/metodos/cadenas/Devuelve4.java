package com.pablomonteserin.metodos.cadenas;

public class Devuelve4 {

	public static void main(String[] args) {
		Devuelve4 l = new Devuelve4();
		String nombre = l.devuelveMasLarga("Ana", "Juan");
		System.out.println(nombre);
	}

	public String devuelveMasLarga(String txt1, String txt2) {
		if (txt1.length() >= txt2.length()) {
			return txt1;
		} else {
			return txt2;
		}
	}
}
