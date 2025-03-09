package com.pablomonteserin.metodos.cadenas;

public class Generar {

	public static void main(String[] args) {
		Generar l = new Generar();
		String nombre = l.devuelveMasLarga2("Ana", "Juan","Rodolfo");
		System.out.println(nombre);
	}

	public String devuelveMasLarga2(String txt1, String txt2, String txt3) {
		if (txt1.length() >= txt2.length() && txt1.length() > txt3.length()) {
			return txt1;
		} else if(txt2.length() > txt1.length()  && txt2.length() > txt3.length()) {
			return txt2;
		}else if(txt3.length() > txt1.length() && txt3.length() > txt2.length()) {
			return txt3;
		}else {
			return "Hay al menos dos cadenas iguales";
		}
	}
}
