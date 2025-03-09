package com.pablomonteserin.implementsRunnable._synchronized;

class Hilo implements Runnable{
	
	static Object mutex = new Object();
	static double variable1 = 100;
	static double variable2 = 90;
	public void run() {
		synchronized(mutex){ //Aquí viene un objeto (un Object, un String, un Integer...) no nulo sobre el cual se va a sincronizar
					//EL objeto mutex sería una especie de guardia de tráfico que decide quien pasa y quien no
			try {
				Thread.sleep(500);
				variable1-=10;			//90			80				70
				Thread.sleep(500);
				variable2 =variable1-10; //80		70			60
				
				System.out.println("Variable1:" + variable1 + " Variable2: "+ variable2);
				
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			
	
		}
	}
}