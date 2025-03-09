package com.pablomonteserin.metodos.ejerciciosconreturn;

public class OrdenarBloques {

	public static void main(String[] args) {
		OrdenarBloques m = new OrdenarBloques();
		String v = m.orderMyLogic(4);
		System.out.println(v);
	}

	public String orderMyLogic(int val) {
		if (val < 5) {
		    return "Menos que 5";
		  }else if (val < 10) {
		    return "Menos que 10";
		  } else {
		    return "Mayor o igual a 10";
		  }
		}
}
