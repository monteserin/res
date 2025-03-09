package com.pablomonteserin.servlets;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class F_ejercicioSumaParam extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    public F_ejercicioSumaParam() {
        super();

    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		String p1 = request.getParameter("p1");
		String p2 = request.getParameter("p2");
		int num1 = Integer.parseInt(p1);
		int num2 = Integer.parseInt(p2);
		int resultado = num1 + num2;

		response.getWriter().write("Resultado: " +resultado);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	}

}
