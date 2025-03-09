package com.pablomonteserin.excepciones;
public class ClausulaFinally {
	public static void main(String[] args) {
		int i = 2;
		int j = 0;
		System.out.println("antes");
		try{
			System.out.println(i/j);
		}catch (ArithmeticException e){
			System.out.println("en catch1");
			e.printStackTrace();
		}catch(Exception e){
			System.out.println("en catch2");
		}catch(Throwable t){
			System.out.println("en catch3");
		}finally{
			System.out.println("en finally");
		}
		System.out.println("despues");
	}
}
