package com.pablomonteserin.metodos.ejerciciossinreturn;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class CalcularCubo {
	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		System.out.println("Introduce un numero");
		int numero = Integer.parseInt(br.readLine());
		
		CalcularCubo calcularCubo = new CalcularCubo();
		calcularCubo.calcularCubo(numero);
	}

	public void calcularCubo(int n) {
		int r = n * n * n;
		System.out.println(r);
	}
}
