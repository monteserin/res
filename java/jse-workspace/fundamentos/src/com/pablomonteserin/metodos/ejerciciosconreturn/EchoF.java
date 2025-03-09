package com.pablomonteserin.metodos.ejerciciosconreturn;

public class EchoF {

	public static void main(String[] args) {
		EchoF m = new EchoF();
		String v = m.echo("Greta");
		System.out.println(v);
	}

	public String echo(String txt) {
		return txt;
	}
}
