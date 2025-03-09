package com.pablomonteserin.metodos.ejerciciosconreturn;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Calculadora {
	public static void main(String[] args) throws IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		System.out.println("Introduzca el primer operando, por favor:");
		float n1 = Float.parseFloat(br.readLine());
		
		System.out.println("Introduzca el segundo operando, por favor:");
		float n2 = Float.parseFloat(br.readLine());
		
		System.out.println("Introduzca el operador, por favor:");
		String op = br.readLine();
		
		Calculadora c = new Calculadora();
		float r =0;
		if (op.equals("+")) {
			r= c.suma(n1,n2);
		} else if (op.equals("-")) {
			r= c.resta(n1,n2);
		} else if (op.equals("*")) {
			r= c.multiplicacion(n1,n2);
		} else if (op.equals("/")) {
			r= c.division(n1,n2);
		}
		
		System.out.println(r);
	}
	
	public float suma(float a, float b) {
		float resultado = a + b;
		return resultado;
	}
	
	public float resta(float a, float b) {
		float resultado = a - b;
		return resultado;
	}
	
	public float multiplicacion(float a, float b) {
		float resultado = a * b;
		return resultado;
	}
	
	public float division(float a, float b) {
		float resultado = a / b;
		return resultado;
	}
}
	
