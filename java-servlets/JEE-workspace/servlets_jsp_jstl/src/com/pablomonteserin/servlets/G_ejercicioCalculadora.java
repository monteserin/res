package com.pablomonteserin.servlets;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class G_ejercicioCalculadora extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    public G_ejercicioCalculadora() {
        super();
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		try{
		String p1 = request.getParameter("p1");
		String p2 = request.getParameter("p2");
		String op = request.getParameter("op");
		int num1 = Integer.parseInt(p1);
		int num2 = Integer.parseInt(p2);
		int resultado = 0;
		if(op.equals("suma")){
			resultado = num1 + num2;
		}else if(op.equals("resta")){
			resultado = num1 - num2;
		}else if(op.equals("multiplicacion")){
			resultado = num1 * num2;
		}else if(op.equals("division")){
			resultado = num1/num2;	
		}		
		PrintWriter out = response.getWriter();
		out.print(resultado);
		}catch(Exception e){
			e.printStackTrace();
		}
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
	}

}
