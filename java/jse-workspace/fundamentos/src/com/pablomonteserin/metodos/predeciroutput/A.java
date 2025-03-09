package com.pablomonteserin.metodos.predeciroutput;

public class A {
		String title;
		boolean published;
		static int total;
		static double maxPrice;
		
		public static void main(String args[]){
			A m_predecirResultado = new A();
			double price;
			if(true)
				price = 100.00;
			System.out.println("|"+m_predecirResultado.title+"|"+m_predecirResultado.published+
					"|"+m_predecirResultado.total+"|"+m_predecirResultado.maxPrice+"|"+price+"|");		
	}
}
