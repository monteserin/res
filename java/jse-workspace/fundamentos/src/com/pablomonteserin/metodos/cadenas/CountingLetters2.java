package com.pablomonteserin.metodos.cadenas;

public class CountingLetters2 {

	public static void main(String[] args) {
		CountingLetters2 l = new CountingLetters2();
		int r = l.contadorDeLetras("Casa", 'a');
		System.out.println(r);
	}

	public int contadorDeLetras(String palabra, char letra) {
		int letterCounter = 0;
		for(int i = 0; i<palabra.length(); i++) {
			if(Character.toString(palabra.charAt(i)).toUpperCase().equals(Character.toString(letra).toUpperCase())) {
				letterCounter++;
			}
		}
		return letterCounter;
	}
}
