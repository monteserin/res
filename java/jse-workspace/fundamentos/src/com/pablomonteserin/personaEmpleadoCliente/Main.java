package com.pablomonteserin.personaEmpleadoCliente;

public class Main {

	public static void main(String[] args) {
		Empleado e1 = new Empleado();
		Empleado e2 = new Empleado();
		Cliente c1 = new Cliente();
		Cliente c2 = new Cliente();
		
		System.out.println(Persona.getInstancias());	
	}
}
