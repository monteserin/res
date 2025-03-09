package com.pablomonteserin.operadores.ejerciciosoperadoresaritmeticos;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class DobleTriple {

	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		System.out.println("Introduce un numero: ");
		int n = Integer.parseInt(br.readLine());
		int r1 = n * 2;
		int r2 = n * 3;
		System.out.println("El doble: " + r1);
		System.out.println("El triple: " + r2);
	}

}
