package com.pablomonteserin.metodos.ejerciciossinreturn;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Metodos {

	public int sumar(int operando1, int operando2){
		return operando1 + operando2;
	}
	public int restar(int operando1, int operando2){
		return operando1 - operando2;
	}
	public int multiplicar(int operando1, int operando2){
		return operando1*operando2;
	}
	public int dividir(int operando1, int operando2){
		return operando1/operando2;
	}
	public static void main(String[] args) throws NumberFormatException, IOException {
		int resultado;
		Metodos calculadora = new Metodos();
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		System.out.println("Introduzca el primer operando, por favor: ");
		int num1 = Integer.parseInt(br.readLine());
		System.out.println("Introduzca el segundo operando, por favor: ");
		int num2 = Integer.parseInt(br.readLine());
		System.out.println("Introduzca el operador, por favor");
		char operador = br.readLine().charAt(0);

		switch(operador){
		case '+':
			resultado = calculadora.sumar(num1, num2);	
			break;
		case '-':
			resultado = calculadora.restar(num1, num2);
			break;
		case '*':
			resultado = calculadora.multiplicar(num1, num2);
			break;
		default:
			resultado = calculadora.dividir(num1,num2);
		}
		System.out.println(resultado);
	}

}
