package com.pablomonteserin.generics;

import java.util.ArrayList;

public class GenericsEnContenedores {
	public static void main(String [] args){
		ArrayList cadenasSinTipo = new ArrayList();
		cadenasSinTipo.add("cosa");
		cadenasSinTipo.add(new Integer(4));
		
		ArrayList<String> cadenasConTipo = new ArrayList<String>();
		cadenasConTipo.add("cosa");
		//cadenasConTipo.add(new Integer(4));		

	}
}
