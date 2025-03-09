package com.pablomonteserin.clasesabstractasinterfaces.claseabstracta;


public class Main {

	public static void main(String args[]) {
		Cerdo c = new Cerdo("miau");
		Vaca v = new Vaca("muuuuuu");
		Gallina g = new Gallina("guay");
		
		c.comunicarse();
		v.comunicarse();
		g.comunicarse();
	}

}
