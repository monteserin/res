package com.pablomonteserin.implementsRunnable.unsynchronized;

class Hilo implements Runnable{
	
	static Object mutex = new Object();
	static double variable = 100;
	static double variable2 = 90;
	public void run() {
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