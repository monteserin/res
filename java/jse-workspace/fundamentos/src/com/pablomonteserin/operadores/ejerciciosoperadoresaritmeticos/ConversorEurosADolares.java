package com.pablomonteserin.operadores.ejerciciosoperadoresaritmeticos;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class ConversorEurosADolares {

	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		System.out.println("Introduzca euros: ");
		int euros = Integer.parseInt(br.readLine());
		int dolares = euros*2;
		System.out.println(dolares);

	}

}
