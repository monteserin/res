package com.pablomonteserin.metodos.cadenas;

public class Devuelve2 {

	public static void main(String[] args) {
		Devuelve2 l = new Devuelve2();
		char letra = l.devuelveUltimaLetra("Ana");
		System.out.println(letra);
	}

	public char devuelveUltimaLetra(String txt) {
		return txt.charAt(txt.length()-1);
	}
}
