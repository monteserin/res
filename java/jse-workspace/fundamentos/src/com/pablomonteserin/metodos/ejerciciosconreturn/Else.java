package com.pablomonteserin.metodos.ejerciciosconreturn;

public class Else {

	public static void main(String[] args) {
		Else m = new Else();
		String v = m.testElse(4);
		System.out.println(v);
	}

	public String testElse(int val) {
		String result = "";

		if (val > 5) {
			result = "Mayor que 5";
		}else {
			result = "5 más pequeño";
		}

		return result;
	}
}
