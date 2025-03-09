package com.pablomonteserin.extendsThread._synchronized_todoUno;


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

class Hilo extends Thread{
	
	static Object mutex = new Object();
	static double variable = 100;
	static double variable2 = 90;
	public void run() {
		synchronized(mutex){ //Aquí viene un objeto (un Object, un String, un Integer...) no nulo sobre el cual se va a sincronizar
					//EL objeto mutex sería una especie de guardia de tráfico que decide quien pasa y quien no
			try {
				Thread.sleep(500);
				variable-=10;//90			80				70
				Thread.sleep(500);
				variable2 =variable-10; //80		70			60
				
				System.out.println("Variable1:" + variable + " Variable2: "+ variable2);
				
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			
	
		}
	}
}