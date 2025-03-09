package com.pablomonteserin.metodos.ejerciciossinreturn;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class CalculaPerimetro {

	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		System.out.println("Introduce el ancho: ");
		int ancho = Integer.parseInt(br.readLine());
		System.out.println("Introduce el alto: ");
		int alto = Integer.parseInt(br.readLine());
		
		CalculaPerimetro c = new CalculaPerimetro();
		c.calcularPerimetro(ancho, alto);

	}
	
	public void calcularPerimetro(int an, int al ) {
		int r = 2*an+2*al;
		System.out.println(r);
	}

}
