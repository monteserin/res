package com.pablomonteserin.metodos.metodoestatico;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class CalculadoraConStatic {

	public static int sumar(int operando1, int operando2){
		return operando1 + operando2;
	}
	public static int restar(int operando1, int operando2){
		return operando1 - operando2;
	}
	public static int multiplicar(int operando1, int operando2){
		return operando1*operando2;
	}
	public static int dividir(int operando1, int operando2){
		return operando1/operando2;
	}
	public static void main(String[] args) throws IOException {
		int resultado;
		CalculadoraConStatic calculadora = new CalculadoraConStatic();
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		System.out.println("Introduzca el primer operando, por favor: ");
		int num1 = Integer.parseInt(br.readLine());
		System.out.println("Introduzca el segundo operando, por favor: ");
		int num2 = Integer.parseInt(br.readLine());
		System.out.println("Introduzca el operador, por favor");
		char operador = br.readLine().charAt(0);

		switch(operador){
		case '+':
			resultado = CalculadoraConStatic.sumar(num1, num2);	
			break;
		case '-':
			resultado = CalculadoraConStatic.restar(num1, num2);
			break;
		case '*':
			resultado = CalculadoraConStatic.multiplicar(num1, num2);
			break;
		default:
			resultado = CalculadoraConStatic.dividir(num1,num2);
		}
		System.out.println(resultado);
	}

}
