package com.pablomonteserin.jsp.servlets;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.pablomonteserin.model.Persona;

/**
 * Servlet implementation class C_recuperarBeanDesdeFormulario
 */
public class C_recuperarBeanDesdeFormulario extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public C_recuperarBeanDesdeFormulario() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		Persona persona = new Persona();
		persona.setNombre(request.getParameter("nombre"));
		persona.setDni(request.getParameter("dni"));
		persona.setDireccion(request.getParameter("direccion"));
		request.setAttribute("persona", persona);
		request.getRequestDispatcher("a_inicio/q_ejercicioRecuperarBeanDesdeFormularioII.jsp").forward(request, response);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	}

}
