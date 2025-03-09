package com.pablomonteserin.metodos.cadenas;

public class Shortcut {

	public static void main(String[] args) {
		Shortcut l = new Shortcut();
		String w =l.shortcut ("Juan" , "Pepe");
		System.out.println(w);
	}

	public String shortcut (String palabra1, String palabra2) {
		return ""+palabra1.charAt(0) + palabra2.charAt(0);
	}
}
