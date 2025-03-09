package com.pablomonteserin.metodos.metodoestatico;

public class MetodosStatic {
	public static void main(String[] args) {
		ClaseConMetodoStatic.saludar("Pepe");
	}
}
class ClaseConMetodoStatic{
	public static void saludar(String nombre){
		System.out.println("Hola " + nombre);
	}
}