package com.pablomonteserin.herenciaconstructores;

public class ConstructorConParametros {
	public ConstructorConParametros(String nombre){
		System.out.println("Hola" + nombre);
	}
	public static void main(String[] args) {
		new ConstructorConParametros("Pepe");
		//La siguiente línea genera un error en tiempo de compilación
		//	new E_constructorConParametros();
	}
}