package com.pablomonteserin.estructurasdecontrol.condicionalif;

public class EjercicioEvaluarI {

	public static void main(String[] args) {
		int i = 7;
		
		if (i >= 0) {
			System.out.println("i es positivo");
		}else {
			System.out.println("i es negativo");
		}
		
		if(i%2==0) {
			System.out.println("i es par");
		}else {
			System.out.println("i es impar");
		}
		
		if(i%5==0) {
			System.out.println("i es múltiplo de 5");
		}
		
		if(i%10==0) {
			System.out.println("i es múltiplo de 10");
		}
		
		if(i>100) {
			System.out.println("i es mayor que 100");
		}else if(i<100) {
			System.out.println("i es menor que 100");
		}
	}

}
