package com.pablomonteserin.herenciaconstructores;

class Padre3{
	public Padre3(){
		System.out.println("Hola, dijo el padre");
	}
}

public class ConstructorSinParametro extends Padre3{
	public ConstructorSinParametro(){
		System.out.println("Hola, dijo el hijo");
	}
	public static void main(String[] args) {
		new ConstructorSinParametro();
	}
}







