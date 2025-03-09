package com.pablomonteserin.metodos.cadenas;

public class Long {

	public static void main(String[] args) {
		Long l = new Long();
		int v = l.longitud("Ana");
		System.out.println(v);
	}

	public int longitud(String txt) {
		return txt.length();
	}

}
