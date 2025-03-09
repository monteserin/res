package com.pablomonteserin.clasesabstractasinterfaces.claseabstracta;

public abstract class Animal {
	String sonido;
	
	Animal(String sonido){
		this.sonido = sonido;
	}
	
	public abstract void comunicarse();

}
