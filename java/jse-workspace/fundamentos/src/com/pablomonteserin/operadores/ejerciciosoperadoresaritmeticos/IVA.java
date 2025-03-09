package com.pablomonteserin.operadores.ejerciciosoperadoresaritmeticos;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class IVA {

	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		System.out.println("Introduce el precio bruto: ");
		int precioBruto = Integer.parseInt(br.readLine());
		float precioFinal = precioBruto*1.21f;
		System.out.println(precioFinal);

	}

}
