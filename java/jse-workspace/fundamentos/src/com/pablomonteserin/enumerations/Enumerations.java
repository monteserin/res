package com.pablomonteserin.enumerations;
// Los tipos enumerados sirven para restringir la selección
//de valores a algunos previamente definidos
enum instrumentos{
   GUITARRA, TROMPETA, BATERIA, BAJO
};
public class Enumerations {
   public static void main (String... args){
      instrumentos in = instrumentos.BATERIA;
      System.out.println(in);
   }
}