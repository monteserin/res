package com.pablomonteserin.metodos.ejerciciosconreturn;

public class Nand {

	public static void main(String[] args) {
		Nand n = new Nand();
		boolean v = n.nand(false, false);
		System.out.println(v);
	}

	public boolean nand(boolean v1, boolean v2) {
		return !(v1 && v2);
	}
}
