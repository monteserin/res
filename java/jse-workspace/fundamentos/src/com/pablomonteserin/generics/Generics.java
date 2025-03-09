package com.pablomonteserin.generics;



public class Generics<String> {
	String valor;

	Generics() {
		// La siguiente línea daría error
		// valor.charAt(2);
	}
}