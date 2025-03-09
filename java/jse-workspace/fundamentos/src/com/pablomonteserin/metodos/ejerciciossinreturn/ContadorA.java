package com.pablomonteserin.metodos.ejerciciossinreturn;

public class ContadorA {

	public static void main(String[] args) {
		String cadena = "Dabale arroz a la zorra el abad";
		int contador=0;
		for(int i =0; i<cadena.length(); i++) {
			String letra = cadena.substring(i, i+1);
			if(letra.equals("a")) {
				contador++;
			}
		}
		System.out.println("El número de a es: " + contador);
		
	}
}
