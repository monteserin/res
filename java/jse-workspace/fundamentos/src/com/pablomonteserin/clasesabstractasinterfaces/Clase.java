package com.pablomonteserin.clasesabstractasinterfaces;
interface Instrument2{
	void play();//automaticamente publico
}

public class Clase implements Instrument2{
	public static void main(String[] args) {
		Clase c = new Clase();
		c.play();
	}
	public void play() {
		System.out.println("Jugar al baloncesto");
	}
}




