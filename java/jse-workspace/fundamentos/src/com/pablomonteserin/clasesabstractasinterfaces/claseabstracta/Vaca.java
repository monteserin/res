package com.pablomonteserin.clasesabstractasinterfaces.claseabstracta;

public class Vaca extends Animal {

	Vaca(String sonido) {
		super(sonido);
	}

	@Override
	public void comunicarse() {
		System.out.println("La vaca cuando est� contenta hace " + sonido);
	}
	
	

}
