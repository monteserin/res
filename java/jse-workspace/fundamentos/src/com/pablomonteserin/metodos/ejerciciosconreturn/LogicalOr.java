package com.pablomonteserin.metodos.ejerciciosconreturn;

public class LogicalOr {

	public static void main(String[] args) {
		LogicalOr m = new LogicalOr();
		String v = m.testLogicalOr(14);
		System.out.println(v);
	}

	public String testLogicalOr(int val) {
		// Only change code below this line

		if (val >= 10 && val <= 20) {
			return "Inside";
		} else {
			return "Outside";
		}
	}

}
