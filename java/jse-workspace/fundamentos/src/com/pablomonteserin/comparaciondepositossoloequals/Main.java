package com.pablomonteserin.comparaciondepositossoloequals;



public class Main {
	public static void main(String[] args) {		
		Deposito d1 = new Deposito("deposito1", 1, 2,3);
		Deposito d2 = new Deposito("deposito2", 3, 3,1);
		
		if(d1.equals(d2))System.out.println("exito1");
		if(d2.equals(d1))System.out.println("exito2");
	}
}
