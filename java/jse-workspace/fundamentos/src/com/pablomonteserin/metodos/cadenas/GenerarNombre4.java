package com.pablomonteserin.metodos.cadenas;

public class GenerarNombre4 {

	public static void main(String[] args) {
		GenerarNombre4 l = new GenerarNombre4();
		l.crearPalabra("o",6);
	}

	public void crearPalabra(String letra, int n) {
		String result = "";
		for(int i = 0; i<n; i++) {
			result+= letra;
		}
		System.out.println(result);
	}
}
