package com.pablomonteserin.metodos.predeciroutput;

public class C {
	public static void main(String[] args) {
		StringBuffer a = new StringBuffer("A");
		StringBuffer b = new StringBuffer("B");
		operate(a, b);
	}

	static void operate(StringBuffer x, StringBuffer y) {
		y.append(x);
		y = x;
		System.out.println(y + "," + x);

	}
}
