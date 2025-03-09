package com.pablomonteserin.clasesabstractasinterfaces.claseabstracta;

public class Vaca extends Animal {

	Vaca(String sonido) {
		super(sonido);
	}

	@Override
	public void comunicarse() {
		System.out.println("La vaca cuando está contenta hace " + sonido);
	}
	
	

}
