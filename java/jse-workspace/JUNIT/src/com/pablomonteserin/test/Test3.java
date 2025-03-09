package com.pablomonteserin.test;

import static org.junit.Assert.*;

import org.junit.Test;

import com.pablomonteserin.Calculadora;

public class Test3 {

	@Test
	public void testSumar() {
		try{
			/*Ahora quiero evaluar la gestión de errores. Para ello, establezco una 
			 * condición que dé error y utilizo assertTrue dentro
			 * del catch para ver si el mensaje de error es el que quiero*/
			Calculadora.sumar(51, 50);
		}catch(Exception e){
			assertTrue(e.getMessage().equals("este texto debería coincidir con el de gestión de error de la aplicación"));
		}		
	}
}
