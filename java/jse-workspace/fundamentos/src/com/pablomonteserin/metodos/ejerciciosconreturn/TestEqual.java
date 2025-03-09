package com.pablomonteserin.metodos.ejerciciosconreturn;

public class TestEqual {

	public static void main(String[] args) {
		TestEqual m = new TestEqual();
		String v = m.testEqual(4);
		System.out.println(v);
	}

	public String testEqual(int val) {
		if (val == 12) { // Cambia esta línea
			return "Equal";
		}
		return "Not Equal";
	}
}
