package com.pablomonteserin.herenciaconstructores;

class A {
	public String toString() {
		return "4";
	}
}

class B extends A {
	public String toString() {
		return super.toString() + "3";
	}
}

public class PredecirResultadoSobreescritura {
	public static void main(String[] args) {
		System.out.println(new B());
	}
}