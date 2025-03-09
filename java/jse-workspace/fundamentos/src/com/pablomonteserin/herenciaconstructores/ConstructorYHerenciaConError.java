package com.pablomonteserin.herenciaconstructores;

public class ConstructorYHerenciaConError extends Padre2{
	public ConstructorYHerenciaConError(){
		//Por defecto un constructor llama al constructor vacío del padre, por lo que 
		//si el padre no tiene constructor vacío tendremos un error
		super("parametro");
		System.out.println("Se ejecuta el hijo");
	}
	
	public static void main(String[] args) {
		new ConstructorYHerenciaConError();
	}
}

class Padre2{
	public Padre2(String parametro){
		System.out.println("Se ejecuta el padre");
	}	
}






















