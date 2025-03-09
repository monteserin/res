package com.pablomonteserin.metodos.ejerciciossinreturn;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class AreaTriangulo {

	public static void main(String[] args) throws NumberFormatException, IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		System.out.println("Introduce la base del triángulo: ");
		float base = Float.parseFloat(br.readLine());
		
		System.out.println("Introduce la altura del triángulo: ");
		float altura = Float.parseFloat(br.readLine());
		

		AreaTriangulo a = new AreaTriangulo();
		a.calcularArea(base, altura);
	}
	
	public void calcularArea(float b, float a) {
		float r = b*a/2;
		System.out.println(r);
	}
}
