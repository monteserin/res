package com.pablomonteserin.operadores.ejerciciosoperadoresaritmeticos;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class ConversorGrados {

	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		System.out.println("Introduce los grados centigrados: ");
		int gradosC = Integer.parseInt(br.readLine());
		float gradosF = gradosC*(9f/5f)+32f;
		System.out.println(gradosF);

	}

}
