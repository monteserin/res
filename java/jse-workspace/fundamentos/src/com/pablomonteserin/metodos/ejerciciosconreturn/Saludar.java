package com.pablomonteserin.metodos.ejerciciosconreturn;

public class Saludar {

	public static void main(String[] args) {
		Saludar s = new Saludar();
		String saludo = s.saludar();
		System.out.println(saludo);
	}

	public String saludar() {
		return "hola";
	}
}
