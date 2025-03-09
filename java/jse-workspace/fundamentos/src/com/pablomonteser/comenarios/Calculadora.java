package com.pablomonteser.comenarios;


/**
 * Representa una entidad capaz de realizar las operaciones aritm�ticas b�sicas
 * @author Pablo Monteser�n
 * @version 1.0
 */
public class Calculadora {

	/**
	 * Calcula la suma de dos n�meros enteros
	 * @param num1: primer n�mero que interviene en la suma 
	 * @param num2: segundo n�mero que interviene en la suma
	 * @return la suma de ambos n�meros
	 */
	public int sumar(int num1, int num2) {
		return num1 + num2;
	}

	public static void main(String[] args) {
		Calculadora calculadora = new Calculadora();
		int sol = calculadora.sumar(3,5);
		System.out.println(sol);
	}
}
