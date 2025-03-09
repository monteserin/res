package com.pablomonteserin.extendsThread.unsynchronized;

class Hilo extends Thread{
	
	static double variable1 = 100;
	static double variable2;
	public void run() {
		try {
			Thread.sleep(500);
			variable1-=10;			//90			80				70
			Thread.sleep(500);
			variable2 =variable1 - 10; 		//60
			
			System.out.println("Variable1:" + variable1 + " Variable2: "+ variable2);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
	}
}