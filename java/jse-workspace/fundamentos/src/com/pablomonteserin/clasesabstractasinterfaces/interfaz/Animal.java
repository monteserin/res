package com.pablomonteserin.clasesabstractasinterfaces.interfaz;

public class Animal implements Granjero {
	static String sonidoMasLargo ="";
	String sonido;
	
	
	Animal(String sonido){
		this.sonido = sonido;
		compararSonido();
	}
	@Override
	public void compararSonido() {
		if(sonidoMasLargo.length()<sonido.length()) {
			sonidoMasLargo = sonido;
		}
		
	}

}
