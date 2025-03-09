package com.pablomonteserin.metodos.teoria;


public class PasoParametros {
    public static void modificaLetra(char letraParam) {
        letraParam = 'A';
    }
	public static void modificaStringBuffer(StringBuffer stringBufferParam) {
		stringBufferParam.append("C");
    }


    public static void modificaLetras(char[] letrasParam) {
        letrasParam[0] = 'A';
    }
    public static void modificaPalabras(String[] palabrasParam) {
        palabrasParam[0] = "B";
    }
    public static void modificaString(String stringParam) {
        stringParam = "B";
    }
    public static void main(String[] args) {
        char letra = 'a';
        StringBuffer stringBuffer = new StringBuffer("c");
        char[] letras = {'a'};
        String[]palabras = {"b"};
        String string = "b";

        modificaLetra(letra);
        modificaStringBuffer(stringBuffer);
        modificaLetras(letras);
        modificaPalabras(palabras);
        modificaString(string);

        System.out.println("La nueva letra vale: " + letra);
        System.out.println("El nuevo stringBuffer vale: " + stringBuffer);
        System.out.println("El nuevo letras vale: " + letras[0]);
        System.out.println("El nuevo palabras vale: " + palabras[0]);
        
        System.out.println("El nuevo String vale: " + string);

    }
}