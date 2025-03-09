package com.pablomonteserin.implementsRunnable._synchronized;


public class Main {

	public static void main(String args[]){
		Thread hilo1 = new Thread(new Hilo());
		Thread hilo2 = new Thread(new Hilo());
		Thread hilo3 = new Thread(new Hilo());
		
		hilo1.start();
		hilo2.start();
		hilo3.start();
		
	}
	
	
}
