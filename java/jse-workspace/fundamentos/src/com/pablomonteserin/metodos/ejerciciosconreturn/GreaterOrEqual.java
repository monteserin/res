package com.pablomonteserin.metodos.ejerciciosconreturn;

public class GreaterOrEqual {


	public static void main(String[] args) {
		GreaterOrEqual m = new GreaterOrEqual();
		String v = m.testGreaterOrEqual(60);
		System.out.println(v);
	}
	
	public String testGreaterOrEqual(int val) {
		if (val >= 20) {  // Cambia esta l�nea
		    return "20 or m�s";
		  }

		  if (val >=10) {  // Cambia esta l�nea
		    return "10 o m�s";
		  }

		  return "menos de 10";
		}
}
