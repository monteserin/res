package com.pablomonteserin.clasesabstractasinterfaces.claseabstracta;

public class Gallina extends Animal {
int numHuevos;
	Gallina(String sonido) {
		super(sonido);
	}

	@Override
	public void comunicarse() {
		System.out.println("La gallina cuando pone huevos hace " + sonido);
	}
	
	
}
