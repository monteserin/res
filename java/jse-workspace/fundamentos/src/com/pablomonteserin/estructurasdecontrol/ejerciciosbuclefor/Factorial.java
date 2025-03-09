package com.pablomonteserin.estructurasdecontrol.ejerciciosbuclefor;
public class Factorial {
	public static void main(String [] args){
		int numero = 5;
		int resultado = 1;
		for (int i = numero; i>0; i--){
			resultado = resultado*i;
		}
		System.out.println(resultado);
	}
}
