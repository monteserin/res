package com.pablomonteserin;

import java.io.IOException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 * Servlet implementation class Controlador
 */
@WebServlet("/controlador")
public class Controlador extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Controlador() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		HttpSession session = request.getSession();
		String action = request.getParameter("action");
		String pagina = "index.html";
		UsuarioBO usuarioBO = new UsuarioBO();
		if(session.getAttribute("id") != null) {
			if(action.equals("pagina2")) {
				pagina = "WEB-INF/pagina2.jsp";
			}
		}
		if(action.equals("login")) {
			String nombre = request.getParameter("nombre");
			String pass = request.getParameter("password");
			Usuario usuario = usuarioBO.getUsuario(nombre, pass);
			session.setAttribute("id", usuario.getId());
			pagina = "WEB-INF/pagina2.jsp";
		}else if(action.equals("matar_sesion")){
			session.invalidate();
		}
		request.getRequestDispatcher(pagina).forward(request, response);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
