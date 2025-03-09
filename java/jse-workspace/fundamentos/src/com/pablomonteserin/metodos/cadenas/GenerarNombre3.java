package com.pablomonteserin.metodos.cadenas;

public class GenerarNombre3 {

	public static void main(String[] args) {
		GenerarNombre3 l = new GenerarNombre3();
		String nombre = l.generarNombre("Amanda", "Laura","Rodolfo");
		System.out.println(nombre);
	}

	public String generarNombre(String txt1, String txt2, String txt3) {
		if (txt1.length() <5 ||  txt2.length()<5 ||txt3.length() < 5) {
			return "Error";
		}else {
			return ""+txt1.substring(txt1.length()-3)+txt2.substring(txt2.length()-3)+txt3.substring(txt3.length()-3);
		}
	}
}
