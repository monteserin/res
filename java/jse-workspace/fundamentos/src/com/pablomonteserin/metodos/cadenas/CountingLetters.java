package com.pablomonteserin.metodos.cadenas;

public class CountingLetters {

	public static void main(String[] args) {
		CountingLetters l = new CountingLetters();
		int r = l.contadorDeLetras("Casa", 'a');
		System.out.println(r);
	}

	public int contadorDeLetras(String palabra, char letra) {
		int letterCounter = 0;
		for(int i = 0; i<palabra.length(); i++) {
			if(palabra.charAt(i)==letra) {
				letterCounter++;
			}
		}
		return letterCounter;
	}
}
