package controller;

import java.io.IOException;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import invitado.Invitado;
import servicio.Servicio;

/**
 * Servlet implementation class Controller
 */
@WebServlet("/Controller")
public class Controller extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Controller() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		String action = request.getParameter("action");
		
	//	List <Invitado> invitados = (List<Invitado>)request.getAttribute("invitadolist");
		
		String ruta = "Index.jsp";
		
		Servicio servicio = new Servicio ();
		
		if (action.contentEquals("alta")) {
			String nombre = request.getParameter("nombre");
			
			Invitado invitado = new Invitado ();
			
			invitado.setNombre(nombre);
			servicio.alta(invitado);
			
		}else if (action.contentEquals("baja")) {
			
			String id = request.getParameter("invitadoeliminar");
			
			Integer id2 = Integer.parseInt(id);
			
			Invitado invitado = new Invitado ();
			
			invitado.setId(id2);
			servicio.baja(invitado);
			
		}else if (action.contentEquals("consulta")) {
			
			//invitados = Servicio.consulta();
			
			ruta = "consulta.jsp";
		}
		
		request.getRequestDispatcher(ruta).forward(request,response);
		
	}
	


	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
