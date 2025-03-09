package com.pablomonteserin.estructurasdecontrol;

public class Switch {
	public static void main(String[] args) {
		char opcion = 'b';
		switch (opcion) {
		case 'a':
			System.out.println("Solucion1");
			break;
		case 'b':
			System.out.println("Solucion2");
			break;
		default:
			System.out.println("default");
		}
	}
}
