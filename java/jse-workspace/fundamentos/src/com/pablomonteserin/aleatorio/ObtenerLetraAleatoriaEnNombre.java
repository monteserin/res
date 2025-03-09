package com.pablomonteserin.aleatorio;

public class ObtenerLetraAleatoriaEnNombre {
	public static void main(String[] args) {
		String nombre = "Pablo";
		int randomNumber = (int) Math.floor(Math.random() *  nombre.length());
		char letra = nombre.charAt(randomNumber);
		System.out.println(letra);
	}
}
