package com.pablomonteserin.enumerations;
//Declarar constructores, métodos y variables dentro
//de un tipo enumerado:
enum TamanoCafe{
	 
	   CHICO(5), MEDIANO(8), GRANDE(10);
	 
	   private int onzas;
	   //No se puede invocar al constructor directamente, 
	   //este se invoca una vez que se crea el tipo enumerado 
	   //y es definido por los argumentos utilizados para crearlo.//
	 
	   TamanoCafe(int onzas){
	      this.onzas = onzas;
	   }
	 
	   public int getOnzas(){
	      return this.onzas;
	   }
	 
	}
	 
	public class Cafe {
	 
	   public static void main(String... args){
		   TamanoCafe tc;
	      tc = TamanoCafe.CHICO;
	 
	      System.out.println("Tamaño de café: "+TamanoCafe.CHICO);
	 
	      System.out.println("Onzas 1(c1): "+TamanoCafe.CHICO.getOnzas());
	   }
	 
	}