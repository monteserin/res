package com.pablomonteserin.ejercicio_hilos;

class Hilo implements Runnable {
	static double variable = 100;
	static Object mutex = new Object();

	public void run() {
		try {
				for (int i = 0; i < 3; i++) {
					System.out.println("operacion " + i);
					Thread.sleep(10);
				}
			
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
}