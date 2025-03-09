package com.pablomonteserin.metodos.cadenas;

public class Devuelve1 {

	public static void main(String[] args) {
		Devuelve1 l = new Devuelve1();
		char letra = l.devuelvePrimeraLetra("Ana");
		System.out.println(letra);
	}

	public char devuelvePrimeraLetra(String txt) {
		return txt.charAt(0);
	}

}
