package com.pablomonteserin.excepciones;

public class ExceptionBasica {
	public static void main(String args[]){
		int i = 2;
		int j = 0;
		System.out.println("antes");
		try{
			System.out.println("en el try");
			System.out.println(i/j);
		}catch (ArithmeticException e){
			System.out.println("en el catch");
			e.printStackTrace();
		}
		System.out.println("despues");
	}
}

