package com.pablomonteserin.metodos.ejerciciosconreturn;

public class GreaterOrEqual {


	public static void main(String[] args) {
		GreaterOrEqual m = new GreaterOrEqual();
		String v = m.testGreaterOrEqual(60);
		System.out.println(v);
	}
	
	public String testGreaterOrEqual(int val) {
		if (val >= 20) {  // Cambia esta línea
		    return "20 or más";
		  }

		  if (val >=10) {  // Cambia esta línea
		    return "10 o más";
		  }

		  return "menos de 10";
		}
}
