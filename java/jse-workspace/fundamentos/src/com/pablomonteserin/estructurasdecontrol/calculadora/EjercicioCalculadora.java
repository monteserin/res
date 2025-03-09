package com.pablomonteserin.estructurasdecontrol.calculadora;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class EjercicioCalculadora {

	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		System.out.println("Introduzca el primer operando, por favor:");
		float n1 = Float.parseFloat(br.readLine());
		
		System.out.println("Introduzca el segundo operando, por favor:");
		float n2 =Float.parseFloat(br.readLine());
		
		System.out.println("Introduzca el operador, por favor:");
		String op = br.readLine();
		
		float resultado = 0f;
		if (op.equals("+")) {
			resultado = n1 + n2;
		} else if (op.equals("-")) {
			resultado = n1 - n2;
		} else if (op.equals("*")) {
			resultado = n1 * n2;
		} else if (op.equals("/")) {
			resultado = n1 / n2;
		}
		System.out.println("El resultado es " + resultado + ".");

	}

}
