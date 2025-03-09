package com.pablomonteser.comenarios;


/**
 * Representa una entidad capaz de realizar las operaciones aritméticas básicas
 * @author Pablo Monteserín
 * @version 1.0
 */
public class Calculadora {

	/**
	 * Calcula la suma de dos números enteros
	 * @param num1: primer número que interviene en la suma 
	 * @param num2: segundo número que interviene en la suma
	 * @return la suma de ambos números
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
