package com.pablomonteserin.servlets;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.apache.log4j.Logger;

/**
 * Servlet implementation class ValidarNombreServlet
 */
public class ValidarNombreServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
      private static Logger logger = Logger.getLogger(ValidarNombreServlet.class);
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ValidarNombreServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {

		if(request.getParameter("nombre").equals("Pablo")){
			logger.debug("Muy bien, has introducido Pablo");

		}else{
			logger.debug("Muy mal, el nombre introducido tenía que ser Pablo");

		}
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	}

}
