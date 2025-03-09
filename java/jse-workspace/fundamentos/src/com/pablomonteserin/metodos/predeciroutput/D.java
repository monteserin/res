package com.pablomonteserin.metodos.predeciroutput;

public class D {

		public static void modify(String s) {
			s += "world!";
		}
		public static void main(String[] args) {
			String s = new String("Hello");
			modify(s);
			System.out.println(s);
	}
}

