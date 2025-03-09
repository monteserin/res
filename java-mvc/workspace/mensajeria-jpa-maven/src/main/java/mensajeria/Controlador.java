package mensajeria;

import java.io.IOException;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import mensajeria.bo.MensajeBO;
import mensajeria.bo.UsuarioBO;
import mensajeria.entities.Mensaje;
import mensajeria.entities.Usuario;

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
		String action = request.getParameter("action");
		String pagina = "index.html";
		UsuarioBO usuarioBO = new UsuarioBO();
		MensajeBO mensajeBO = new MensajeBO();
		HttpSession session = request.getSession();
		if(action.equals("login")) {
			String nombre = request.getParameter("nombre");
			String pass = request.getParameter("password");
			Usuario usuario = usuarioBO.consultaUsuario(nombre, pass);
			session.setAttribute("usuarioLogueadoId", usuario.getId());
			System.out.println(usuario.getNombre());
			pagina = "menu.html";
		}else if(action.equals("ver-mensajes")) {
			Integer usuarioLogueadoId = (Integer) session.getAttribute("usuarioLogueadoId");

			List<Mensaje> mensajes = mensajeBO.recuperarMensajes(usuarioLogueadoId);
			request.setAttribute("mensajes", mensajes);
			pagina = "ver-mensajes.jsp";

		}else if(action.equals("escribir-mensajes")) {
			List<Usuario> usuarios = usuarioBO.getUsuarios();
			request.setAttribute("usuarios", usuarios);
			pagina = "escribir-mensaje.jsp";

		}else if(action.equals("escribir-mensajes2")) {
			String [] mensajes = request.getParameterValues("mensajes[]");
			String mensaje = request.getParameter("mensaje");
			Integer usuarioLogueadoId = (Integer) session.getAttribute("usuarioLogueadoId");
			mensajeBO.addMensajes(usuarioLogueadoId, mensajes, mensaje);
			pagina = "menu.html";

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
