package com.pablomonteserin.encapsulamientoyherencia;

class Padre{
	public static void metodoPadre(String txt){
		System.out.println(txt);
	}
}
public class D_sobrecarga_sobreescritura extends Padre{
	//SOBREESCRITURA
	//El tipo de dato devuelto no debe cambiar 
	//Los parámetros de entrada no deben cambiar
	//La accesibilidad no será más restrictiva que la del método original
	//Si el método original es static, el método que hace el override también debe serlo
	public static void metodoPadre(String txt){
		System.out.println("Tras la sobrecarga la funcionalidad cambia " + txt);
	}
	//SOBRECARGA
	//El tipo de dato devuelto debe cambiar
	//Los parámetros de entrada deben cambiar
	//La accesibilidad puede ser más restrictiva que la del método original
	//El número de checked exceptions arrojadas debe ser el mismo
	public int metodoPadre(int codigoDespedida){
		System.out.println(codigoDespedida);
		return 4;
	}
	public static void main(String[] args){
		D_sobrecarga_sobreescritura sobrecarga_sobreescritura = new D_sobrecarga_sobreescritura();
		sobrecarga_sobreescritura.metodoPadre("Valor");
		sobrecarga_sobreescritura.metodoPadre(3);
	}	
}
