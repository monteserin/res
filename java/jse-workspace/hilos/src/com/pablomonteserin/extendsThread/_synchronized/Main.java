package com.pablomonteserin.extendsThread._synchronized;


public class Main {

	public static void main(String args[]){
		Hilo hilo1 = new Hilo();
		Hilo hilo2 = new Hilo();
		Hilo hilo3 = new Hilo();
		
		hilo1.start();
		hilo2.start();
		hilo3.start();
		
	}
	
	
}
