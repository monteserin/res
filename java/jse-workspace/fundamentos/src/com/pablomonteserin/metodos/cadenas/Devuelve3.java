package com.pablomonteserin.metodos.cadenas;

public class Devuelve3 {

	public static void main(String[] args) {
		Devuelve3 l = new Devuelve3();
		char letra = l.devuelveEnesimaLetra("Ana",1);
		System.out.println(letra);
	}

	public char devuelveEnesimaLetra(String txt, int pos) {
		return txt.charAt(pos);
	}
}
