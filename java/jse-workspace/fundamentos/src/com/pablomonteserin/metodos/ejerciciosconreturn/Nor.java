package com.pablomonteserin.metodos.ejerciciosconreturn;

public class Nor {

	public static void main(String[] args) {
		Nor n = new Nor();
		boolean v = n.nor(false, false);
		System.out.println(v);
	}

	public boolean nor(boolean v1, boolean v2) {
		return !(v1 && v2);
	}
}
