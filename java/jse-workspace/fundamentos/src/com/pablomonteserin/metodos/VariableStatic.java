package com.pablomonteserin.metodos;

public class VariableStatic {
	static int variableEstatica = 0;
	int variableNoEstatica = 0;
	public static void main(String [] args){
		VariableStatic  q_variableStatic_1 = new VariableStatic();
		VariableStatic  q_variableStatic_2 = new VariableStatic();
		
		VariableStatic.variableEstatica++;
		VariableStatic.variableEstatica++;

		q_variableStatic_1.variableNoEstatica++;
		q_variableStatic_2.variableNoEstatica++;
		
		System.out.println(VariableStatic.variableEstatica);
		System.out.println(q_variableStatic_1.variableNoEstatica++);
		System.out.println(q_variableStatic_2.variableNoEstatica++);
		
	}
}


