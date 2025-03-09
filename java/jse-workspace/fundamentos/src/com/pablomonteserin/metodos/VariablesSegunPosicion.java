package com.pablomonteserin.metodos;

public class VariablesSegunPosicion {
	/*
	 * VARIABLES MIEMBRO
	 * 
	 * Se crean al hacer una instancia de la clase.
	 * Se destruyen
	 * cuando el garbage colector destruye dicha instancia. 
	 * 
	 * Si no las inicializo, se inicializan solas, ya sea con el valor 0 o null según el caso.
	 */
	
	String variableMiembro;
	
	public void metodo(){
		/*VARIABLES AUTOMATICAS
		 * 
		 * Se crea cuando se lee esta línea del método. 
		 * Se destruye cuando termina de leerse dicha variable.
		 * 
		 * Debo inicializarlas para poder usarlas.
		 * */
		
		String variableAutomatica;
		//La siguiente línea daría error porque la variableAutomatica no se ha inicializado
		//variableAutomatica.charAt(3);
	}
}

