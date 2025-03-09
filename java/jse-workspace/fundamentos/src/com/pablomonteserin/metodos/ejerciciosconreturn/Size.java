package com.pablomonteserin.metodos.ejerciciosconreturn;

public class Size {

	public static void main(String[] args) {
		Size m = new Size();
		String v = m.testSize(4);
		System.out.println(v);
	}

	public String testSize(int num) {
		  if(num < 5)return "Tiny";
		  else if(num < 10)return "Small";
		  else if (num < 15) return "Medium";
		  else if (num < 20) return "Large";
		  else return "Huge";
	}
}
