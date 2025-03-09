package com.pablomonteserin.metodos.ejerciciosconreturn;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class AreaTriangulo {

	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		System.out.println("Introduce la base del triangulo: ");
		float base = Float.parseFloat(br.readLine());
		
		System.out.println("Introduce la altura del triangulo: ");
		float altura = Float.parseFloat(br.readLine());
		

		AreaTriangulo a = new AreaTriangulo();
		float resultado  = a.calcularArea(base, altura);
		System.out.println(resultado);
	}
	
	public float calcularArea(float b, float a) {
		float r = b*a/2;
		return r;
	}
}
