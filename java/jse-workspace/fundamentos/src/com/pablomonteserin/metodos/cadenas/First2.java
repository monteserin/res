package com.pablomonteserin.metodos.cadenas;

public class First2 {

	public static void main(String[] args) {
		First2 l = new First2();
		String w = l.firstWord ("Que bueno es todo");
		System.out.println(w);
	}

	public String firstWord (String palabra) {
		return palabra.substring(0, palabra.indexOf(" "));
	}
}
