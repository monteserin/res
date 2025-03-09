package com.pablomonteserin.metodos.predeciroutput;

public class B {

	private static int j = 0;
	
	public static Boolean methodB(int k){
		j += k;
		return true;
	}
	public static void methodA(int i) {
		Boolean b;
		b = i < 10 | methodB(4);
		b = i < 10 || methodB(8);
	}
	public static void main (String args[]){
		methodA(0);
		System.out.println(j);
	}
}

