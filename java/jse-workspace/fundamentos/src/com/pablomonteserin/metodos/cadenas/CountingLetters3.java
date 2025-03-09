package com.pablomonteserin.metodos.cadenas;

public class CountingLetters3 {

	public static void main(String[] args) {
		CountingLetters3 l = new CountingLetters3();
		String w = l.contadorDeLetras2("Casa", "Avión", 'a');
		System.out.println(w);
	}

	public String contadorDeLetras2(String palabra1, String palabra2, char letra) {
		int letterCounter1 = 0;
		int letterCounter2 = 0;
		for (int i = 0; i < palabra1.length(); i++) {
			if (Character.toString(palabra1.charAt(i)).toUpperCase().equals(Character.toString(letra).toUpperCase())) {
				letterCounter1++;
			}
		}

		for (int i = 0; i < palabra2.length(); i++) {
			if (Character.toString(palabra2.charAt(i)).toUpperCase().equals(Character.toString(letra).toUpperCase())) {
				letterCounter2++;
			}
		}
		return letterCounter1 > letterCounter2 ? palabra1 : palabra2;
	}
}
