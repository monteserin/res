package com.pablomonteserin.estructurasdecontrol;

public class CompararDosCadenas {
	public static void main(String[] args) {
		String cadena1 = new String("Hola");
		String cadena2 = new String("Hola");
		String cadena3 = "Adios";
		String cadena4 = "Adios";
		if (cadena1.equals(cadena2)){
		   System.out.println("Son iguales usando el equals");
		}
		if (cadena1==cadena2){
			   System.out.println("Son iguales usando el ==");
		}
		if (cadena3==cadena4){
			   System.out.println("Son iguales usando el = cuando la cadena es creada en un pool");
		}
	}
}






