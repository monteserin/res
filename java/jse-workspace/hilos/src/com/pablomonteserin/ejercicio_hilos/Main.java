package com.pablomonteserin.ejercicio_hilos;

public class Main {
	public static void main(String[] args) {
		for (int i = 0; i < 2; i++) {
			Thread t = new Thread(new Hilo());
			t.start();
		}
	}
}
