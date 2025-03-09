package com.pablomonteserin;

public class Calculadora {

	public static int sumar(int a, int b){
		int resultado = a + b;
		if(resultado <100){
			return resultado;
		}else{
			throw new RuntimeException("no se manejan números tan grandes");
		}		
	}
}
