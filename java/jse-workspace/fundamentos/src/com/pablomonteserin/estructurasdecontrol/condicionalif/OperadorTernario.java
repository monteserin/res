package com.pablomonteserin.estructurasdecontrol.condicionalif;

public class OperadorTernario {
	public static void main(String[] args) {
		int a = 5;
		int b = 3;

		if(a>b){System.out.println("a es mayor que b");}
		else{System.out.println("b es mayor que a");}
		
		String resultado = (a>b)?"a es mayor que b":"b es mayor que a";
		System.out.println(resultado);
		
	}
}






