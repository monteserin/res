package com.pablomonteserin.estructurasdecontrol.calculadora;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

import javax.script.ScriptEngine;
import javax.script.ScriptEngineManager;
import javax.script.ScriptException;

public class Eval {

	public static int sumar(int operando1, int operando2) {
		return operando1 + operando2;
	}

	public static int restar(int operando1, int operando2) {
		return operando1 - operando2;
	}

	public static int multiplicar(int operando1, int operando2) {
		return operando1 * operando2;
	}

	public static int dividir(int operando1, int operando2) {
		return operando1 / operando2;
	}

	public static void main(String[] args) throws ScriptException, IOException {
		int resultado;
		Eval calculadora = new Eval();
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		System.out.println("Introduzca el primer operando, por favor: ");
		String num1 = br.readLine();;
		System.out.println("Introduzca el segundo operando, por favor: ");
		String num2 = br.readLine();
		System.out.println("Introduzca el operador, por favor");
		char operador = br.readLine().charAt(0);

		String txt = num1 + operador + num2;

		ScriptEngineManager manager = new ScriptEngineManager();
		ScriptEngine engine = manager.getEngineByName("js");
		Object result = engine.eval(txt);
		System.out.println(String.valueOf(result));
	}

}
