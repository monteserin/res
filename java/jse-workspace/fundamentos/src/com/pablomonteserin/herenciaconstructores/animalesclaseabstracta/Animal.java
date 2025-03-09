package com.pablomonteserin.herenciaconstructores.animalesclaseabstracta;

public abstract class Animal {
	static String sonidoMasLargo="";
	String sonido;

	Animal() {
		establecerSonido();
		compararSonido();
	}

	void compararSonido() {
		if(sonidoMasLargo.length()<sonido.length()) {
			sonidoMasLargo = sonido;
		}
	}

	abstract void establecerSonido();
}
