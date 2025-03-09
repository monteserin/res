package com.pablomonteserin.metodos.ejerciciosconreturn;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class CalcularCubo {
	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		System.out.println("Introduce un numero");
		int numero = Integer.parseInt(br.readLine());
		
		CalcularCubo calcularCubo = new CalcularCubo();
		int variable = calcularCubo.calcularCubo(numero);
		System.out.println(variable);
	}

	public int calcularCubo(int n) {
		int r = n * n * n;
		return r;
	}
}
