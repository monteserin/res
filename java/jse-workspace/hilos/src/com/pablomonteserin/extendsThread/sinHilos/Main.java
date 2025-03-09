package com.pablomonteserin.extendsThread.sinHilos;


public class Main {
	public static void main(String args[]){
		HiloFalso hilo1 = new HiloFalso();
		HiloFalso hilo2 = new HiloFalso();
		HiloFalso hilo3 = new HiloFalso();
		hilo1.run();
		hilo2.run();
		hilo3.run();	
	}
}
