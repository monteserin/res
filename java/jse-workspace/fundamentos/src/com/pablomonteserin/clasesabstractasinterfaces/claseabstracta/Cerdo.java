package com.pablomonteserin.clasesabstractasinterfaces.claseabstracta;

public class Cerdo extends Animal {
	int kilosCarne;
	
	Cerdo(String sonido) {
		super(sonido);
	}

	@Override
	public void comunicarse() {
		System.out.println("El cerdo cuando pesa mucho hace " + sonido);
	}

}
