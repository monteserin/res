package com.pablomonteserin.metodos.ejerciciosconreturn;

public class Else2 {

	public static void main(String[] args) {
		Else2 m = new Else2();
		String v = m.testElse(4);
		System.out.println(v);
	}

	public String testElse(int val) {
		String result = "";

		if (val > 5) {
			result = "Bigger than 5";
		} else if (val <= 5) {
			result = "5 or Smaller";
		} else {
			result = "equal to 5";
		}
		return result;
	}
}
