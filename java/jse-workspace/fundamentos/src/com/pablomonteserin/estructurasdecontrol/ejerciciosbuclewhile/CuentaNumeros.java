package com.pablomonteserin.estructurasdecontrol.ejerciciosbuclewhile;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class CuentaNumeros {
	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		boolean metioUnMenos1 = false;
		int contador = 0;
		while (!metioUnMenos1) {
			System.out.println("Introduce un numero: ");
			int n = Integer.parseInt(br.readLine());
			if (n == -1) {
				metioUnMenos1 = true;
			} else {
				contador++;
			}
		}
		System.out.println(contador);
	}
}
