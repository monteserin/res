package com.pablomonteserin.metodos.ejerciciosconreturn;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Circunferencia {

	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		System.out.println("Introduzca el radio: ");
		float r = Integer.parseInt(br.readLine());
		
		Circunferencia c = new Circunferencia();
		c.calculaPerimetro(r);
		c.calculaArea(r);
		
	}
	
	public void calculaPerimetro(float radio) {
		float resultado = 2*3.14f*radio;
		System.out.println(resultado);
	}
	public void calculaArea(float radio) {
		float resultado = 3.14f*radio*radio;
		System.out.println(resultado);

	}
}


