package com.pablomonteserin.herenciaconstructores.animales;

public class Animal {
	static String sonidoMasLargo="";
	String sonido;
	Animal(String sonido){
		this.sonido = sonido;
		compararSonido();
	}
	private void compararSonido() {
		if(sonidoMasLargo.length() < sonido.length()) {
			sonidoMasLargo = sonido;
		}
	}
}
