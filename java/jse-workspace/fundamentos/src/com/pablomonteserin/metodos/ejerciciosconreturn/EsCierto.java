package com.pablomonteserin.metodos.ejerciciosconreturn;

public class EsCierto {

	public static void main(String[] args) {
		EsCierto m = new EsCierto();
		String v = m.esCierto(true);
		System.out.println(v);
	}

	public String esCierto(boolean val) {
		if(val) {
			return "Si, es cierto";
		}else {
			return "No, es falso";
		}
	}
}
