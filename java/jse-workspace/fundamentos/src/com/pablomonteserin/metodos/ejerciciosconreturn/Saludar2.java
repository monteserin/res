package com.pablomonteserin.metodos.ejerciciosconreturn;

public class Saludar2 {

	public static void main(String[] args) {
		Saludar2 m = new Saludar2();
		String v = m.saludar("Ada");
		System.out.println(v);
	}

	public String saludar(String nombre) {
		return "Hola " + nombre;
	}
}
