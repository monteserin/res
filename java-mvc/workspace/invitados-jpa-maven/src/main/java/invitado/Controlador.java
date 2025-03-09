package invitado;



import java.io.IOException;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

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
		InvitadoBO invitadoBO = new InvitadoBO();
		if(action.equals("alta")) {
			String nombre = request.getParameter("nombre");
			Invitado invitado = new Invitado();
			invitado.setNombre(nombre);
			invitadoBO.alta(invitado);
		}else if(action.equals("baja")) {
			int id = Integer.parseInt(request.getParameter("id"));
			invitadoBO.baja(id);
			
		}else if(action.equals("consulta")) {
			pagina = "consulta.jsp";
			List<Invitado> invitados = invitadoBO.getInvitados();
			request.setAttribute("invitados", invitados);
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
