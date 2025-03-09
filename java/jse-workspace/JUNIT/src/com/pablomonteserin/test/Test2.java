package com.pablomonteserin.test;

import static org.junit.Assert.*;

import org.junit.Test;

import com.pablomonteserin.Calculadora;

public class Test2 {

	@Test
	public void testSumar() {
		/*Cada vez que no se cumpla un assertTrue, la prueba fallará y el fallo 
		 * aparecerá indicado en rojo en la columna de la izquierda de eclipse*/
		assertTrue(Calculadora.sumar(2,2)==4);
	}
	
}
