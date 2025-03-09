package com.pablomonteserin.metodos.ejerciciossinreturn;

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
		
		if (op.equals("+")) {
			c.suma(n1,n2);
		} else if (op.equals("-")) {
			c.resta(n1,n2);
		} else if (op.equals("*")) {
			c.multiplicacion(n1,n2);
		} else if (op.equals("/")) {
			c.division(n1,n2);
		}
	}
	
	public void suma(float a, float b) {
		float resultado = a + b;
		System.out.println(resultado);
	}
	
	public void resta(float a, float b) {
		float resultado = a - b;
		System.out.println(resultado);
	}
	
	public void multiplicacion(float a, float b) {
		float resultado = a * b;
		System.out.println(resultado);
	}
	
	public void division(float a, float b) {
		float resultado = a / b;
		System.out.println(resultado);
	}
}
