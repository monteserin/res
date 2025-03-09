package com.pablomonteserin.metodos.ejerciciosconreturn;

public class Xor {

	public static void main(String[] args) {
		Xor n = new Xor();
		boolean v = n.xor(false, false);
		System.out.println(v);
	}

	public boolean xor(boolean v1, boolean v2) {
		return v1 != v2;
	}
}
