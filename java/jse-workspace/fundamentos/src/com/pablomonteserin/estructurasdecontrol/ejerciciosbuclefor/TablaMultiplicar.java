package com.pablomonteserin.estructurasdecontrol.ejerciciosbuclefor;

public class TablaMultiplicar {
	public static void main(String[] args) {
		for(int i=1; i<=10; i++) {
			for(int j=1;j<=10; j++) {
				int r= i*j;
				System.out.println(i+"*"+j+" = " + r);
			}
		}
	}
}
