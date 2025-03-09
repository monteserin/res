package com.pablomonteserin.metodos.ejerciciosconreturn;

public class LessThan {

	public static void main(String[] args) {
		LessThan m = new LessThan();
		String v = m.testLessThan(60);
		System.out.println(v);

	}
	
	public String testLessThan(int val) {
		  if (val <25) {  // Cambia esta línea
		    return "Por debajo de 25";
		  }

		  if (val < 55) {  // Cambia esta línea
		    return "Por debajo de 55";
		  }

		  return "55 o más";
		}
}
