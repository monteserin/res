package com.pablomonteserin.estructurasdecontrol.condicionalif;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class ParOImparConTernario {

	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		System.out.println("Introduce un numero: ");
		int i = Integer.parseInt(br.readLine());;
		String resultado = (i%2==0)?"es par":"es impar";
		System.out.println(resultado);
	}
}
