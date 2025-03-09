package com.pablomonteserin.metodos.cadenas;

public class GenerarNombre2 {

	public static void main(String[] args) {
		GenerarNombre2 l = new GenerarNombre2();
		String nombre = l.generarNombre2("Amanda", "Laura","Rodolfo");
		System.out.println(nombre);
	}

	public String generarNombre2(String txt1, String txt2, String txt3) {
		if (txt1.length() <5 ||  txt2.length()<5 ||txt3.length() < 5) {
			return "Error";
		}else {
			return ""+txt1.charAt(txt1.length()-1)+txt2.charAt(txt2.length()-1)+txt3.charAt(txt3.length()-1);
		}
	}
}
