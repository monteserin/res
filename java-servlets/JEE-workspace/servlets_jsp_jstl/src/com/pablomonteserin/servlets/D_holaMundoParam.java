package com.pablomonteserin.servlets;

import java.io.IOException;
import java.net.URLDecoder;
import java.net.URLEncoder;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/saludar")
public class D_holaMundoParam extends HttpServlet {
	private static final long serialVersionUID = 1L;

    public D_holaMundoParam() {
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		String nombre = new String(request.getParameter("nombre").getBytes(
                "iso-8859-1"), "UTF-8");
		
		
		request.setCharacterEncoding("UTF-8");
	
		//String queryString = URLDecoder.decode(request.getQueryString(), "UTF-8");
		response.getWriter().write("Adios " + nombre);
		
		//Si pongo la siguiente linea no hace falta poner la siguiente de más abajo
		response.setContentType("text/html; charset=utf-8");
		response.setCharacterEncoding("UTF-8");
		System.out.println("Hola mundo!");
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
	doGet(request,response);
	}

}
