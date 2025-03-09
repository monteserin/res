package com.pablomonteserin.otros;

public class StringPerformance {

	public static void main(String[] args) {
		String s1 = "hola";
		StringBuffer s2 = new StringBuffer("hola");
		StringBuilder s3 = new StringBuilder("hola");
		
		long empieza = System.currentTimeMillis();
		for(int i = 0; i<10000; i++){
			s1 += "hola";
		}
		long final1 = System.currentTimeMillis()-empieza;
		empieza = System.currentTimeMillis();
		for(int i = 0; i < 10000; i++){
			s2.append("hola");
		}
		long final2 = System.currentTimeMillis()-empieza;
		empieza = System.currentTimeMillis();
		for(int i = 0; i <10000; i++){
			s3.append("hola");
		}
		
		long final3 = System.currentTimeMillis() - empieza;
		
		System.out.println("Usando la clase String: " + final1);
		System.out.println("Usando la clase StringBuffer: " + final2);
		System.out.println("Usando la clase StringBuilder: " + final3);
	}

}
