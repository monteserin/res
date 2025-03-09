package com.pablomonteserin.herenciaconstructores;

public class ConstructorYHerenciaSinError extends Padre5{
	public ConstructorYHerenciaSinError(){
		System.out.println("Se ejecuta el hijo");
	}
	
	public static void main(String[] args) {
		new ConstructorYHerenciaSinError();
	}
}

class Padre5{
	public Padre5(){
		System.out.println("Se ejecuta el padre");
	}	
}