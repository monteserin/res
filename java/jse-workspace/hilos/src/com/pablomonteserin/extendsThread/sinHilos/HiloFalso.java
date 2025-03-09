package com.pablomonteserin.extendsThread.sinHilos;

class HiloFalso{
	
	static double variable1 = 100;
	static double variable2;
	public void run() {
			variable1-=10;					//90			80				70
			variable2 =variable1 - 10; 		//80	70		60
			
			System.out.println("Variable1:" + variable1 + " Variable2: "+ variable2);
	}
}