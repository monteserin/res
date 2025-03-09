package com.pablomonteserin.clasesabstractasinterfaces;
abstract class Instrument{
	public abstract void play();
	public void afine(){}
}

public class A_claseAbstracta extends Instrument{
	public void play() {
		System.out.println("jugar");
	}
}





