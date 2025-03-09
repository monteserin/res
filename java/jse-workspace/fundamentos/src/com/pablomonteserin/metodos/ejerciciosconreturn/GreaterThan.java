package com.pablomonteserin.metodos.ejerciciosconreturn;

public class GreaterThan {

	public static void main(String[] args) {
		GreaterThan m = new GreaterThan();
		String v = m.testGreaterThan(60);
		System.out.println(v);

	}
	public String testGreaterThan(int val) {
		  if (val > 100) {  // Cambia esta línea
		    return "Por encima de 100";
		  }

		  if (val > 10) {  // Cambia esta línea
		    return "Por encima de 10";
		  }

		  return "10 or menos";
		}
}
