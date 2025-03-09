package foro;

import java.io.IOException;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import foro.bo.ComentarioBO;
import foro.bo.HiloBO;
import foro.bo.UsuarioBO;
import foro.entities.Comentario;
import foro.entities.Hilo;
import foro.entities.Usuario;

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
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		String action = request.getParameter("action");
		HiloBO hiloBO = new HiloBO();
		UsuarioBO usuarioBO = new UsuarioBO();
		String pagina = "index.html";
		if (action.equals("crear-hilo")) {
			String nombre_hilo = request.getParameter("nombre_hilo");
			String txt_hilo = request.getParameter("txt_hilo");
			Hilo hilo = new Hilo();
			hilo.setNombre_hilo(nombre_hilo);
			hilo.setTxt_hilo(txt_hilo);
			hiloBO.crearHilo(hilo);
			pagina = "menu.html";

		} else if (action.equals("ver-hilos")) {
			List<Hilo> hilos = hiloBO.consultarHilos();
			request.setAttribute("hilos", hilos);
			pagina = "ver-hilos.jsp";

		} else if (action.equals("login")) {
			String nombre = request.getParameter("nombre");
			String password = request.getParameter("password");
			Usuario u = usuarioBO.consultaUsuario(nombre, password);
			if (u != null)
				pagina = "menu.html";
		} else if (action.equals("ver-hilo")) {
			String intStr = request.getParameter("hilo_id");
			int id = Integer.parseInt(intStr);
			Hilo hilo = hiloBO.consultarHilo(id);
			ComentarioBO comentarioBO = new ComentarioBO();

			List<Comentario> comentarios = comentarioBO.consultarComentariosPorHilo(id);
			request.setAttribute("hilo", hilo);
			pagina = "ver-hilo.jsp";
		} else if (action.equals("nuevo_comentario")) {
			String txt = request.getParameter("txtComentario");
			String intStr = request.getParameter("hilo_id");
			int id = Integer.parseInt(intStr);
			Hilo hilo = hiloBO.consultarHilo(id);
			hilo.setId(id);
			
			Comentario c = new Comentario();
			c.setHilo(hilo);
			c.setTxt(txt);
			ComentarioBO comentarioBO = new ComentarioBO();
			comentarioBO.saveComentario(c);
			List<Comentario> comentarios = comentarioBO.consultarComentariosPorHilo(id);
			request.setAttribute("comentarios", comentarios);
			request.setAttribute("hilo", hilo);
			pagina = "ver-hilo.jsp";
		}
		request.getRequestDispatcher(pagina).forward(request, response);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
