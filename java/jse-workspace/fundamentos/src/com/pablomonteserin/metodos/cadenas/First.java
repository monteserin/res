package com.pablomonteserin.metodos.cadenas;

public class First {

	public static void main(String[] args) {
		First l = new First();
		String w =l.firstChar ("    Juan" );
		System.out.println(w);
	}

	public String firstChar (String palabra1) {
		return ""+palabra1.trim().charAt(0);
	}
}
