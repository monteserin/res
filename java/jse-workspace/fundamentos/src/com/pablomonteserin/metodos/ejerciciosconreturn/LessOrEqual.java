package com.pablomonteserin.metodos.ejerciciosconreturn;

public class LessOrEqual {

	public static void main(String[] args) {
		LessOrEqual m = new LessOrEqual();
		String v = m.testLessOrEqual(60);
		System.out.println(v);

	}
	
	public String testLessOrEqual(int val) {
		  if (val <=12) {  // Cambia esta línea
		    return "Menor o igual a 12";
		  }

		  if (val <=12) {  // Cambia esta línea
		    return "Menor o igual a 24";
		  }

		  return "More Than 24";
		}
}
