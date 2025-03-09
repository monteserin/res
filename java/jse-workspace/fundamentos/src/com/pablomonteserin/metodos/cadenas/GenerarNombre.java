package com.pablomonteserin.metodos.cadenas;

public class GenerarNombre {

	public static void main(String[] args) {
		GenerarNombre l = new GenerarNombre();
		String nombre = l.generarNombre("Amanda", "Sebastian","Rodolfo");
		System.out.println(nombre);
	}

	public String generarNombre(String txt1, String txt2, String txt3) {
		if (txt1.length() <5 ||  txt2.length()<5 ||txt3.length() < 5) {
			return "Error";
		}else {
			return txt1.substring(0,2)+txt2.substring(0,2)+txt3.substring(0,2);
		}
	}
}
