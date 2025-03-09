package futbol.bo;

import java.io.IOException;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import futbol.entity.Equipo;
import futbol.entity.Jugador;

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
		String pagina = "index.jsp";
		EquipoBO equipoBO = new EquipoBO();
		String action =  request.getParameter("action");
		if (action.equals("consulta")) {
			List<Equipo> equipos = equipoBO.consultarEquipos();
			request.setAttribute("equipos", equipos);

			pagina = "equipos.jsp";
		}else if(action.equals("consulta_equipo_por_id")) {
			String equipo_codTxt =  request.getParameter("equipo_cod");
			int equipo_cod = Integer.parseInt(equipo_codTxt);

			List<Jugador> jugadores = equipoBO.consultarJugadores(equipo_cod);
			request.setAttribute("jugadores", jugadores);
			
			List<Equipo> equipos = equipoBO.consultarEquipos();
			request.setAttribute("equipos", equipos);
			
			pagina = "equipos.jsp";
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
