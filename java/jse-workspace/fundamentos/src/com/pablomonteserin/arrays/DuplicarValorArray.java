package com.pablomonteserin.arrays;

public class DuplicarValorArray {

	public static void main(String[] args) {
		int [] myList = {1,9,3,8,5,7};
		
		for(int i =0; i<myList.length; i++) {
			int j = myList[i]*2;
			System.out.println(j);
		}
	}

}
