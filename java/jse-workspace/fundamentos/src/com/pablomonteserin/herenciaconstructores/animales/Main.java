package com.pablomonteserin.herenciaconstructores.animales;


public class Main {


	public static void main(String args[]) {
		new Gato("miau");
		new Perro("guau guau");
		new Vaca("muu");
		System.out.println(Animal.sonidoMasLargo);
	}

}
