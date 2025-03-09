package com.pablomonteserin.excepciones;

public class ExceptionConVariosCatch {
	public static void main(String args[]){
		int i = 2;
		int j = 0;
		System.out.println("antes");
		try{
			System.out.println("en el try");
			System.out.println(i/j);
		}catch (ArithmeticException e){
			System.out.println("en catch1");
			e.printStackTrace();
		}catch(Exception e){
			System.out.println("en catch2");
			e.printStackTrace();
		}catch(Throwable t){
			System.out.println("en catch3");
			t.printStackTrace();
		}
		System.out.println("despues");
	}
}

