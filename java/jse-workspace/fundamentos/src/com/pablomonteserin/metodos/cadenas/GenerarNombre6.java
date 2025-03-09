package com.pablomonteserin.metodos.cadenas;

public class GenerarNombre6 {

	public static void main(String[] args) {
		GenerarNombre6 l = new GenerarNombre6();
		String r = l.addGuiones("Casa");
		System.out.println(r);
	}

	public String addGuiones(String palabra) {
		String result = "";
		for(int i = 0; i<palabra.length(); i++) {
			result+= palabra.charAt(i)+"_";
		}
		return result;
	}
}
