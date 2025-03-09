package futbol;

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
			String foto_escudo =  request.getParameter("foto_escudo");
			String foto_equipo = request.getParameter("foto_equipo");
			request.setAttribute("foto_escudo",foto_escudo);
			request.setAttribute("foto_equipo", foto_equipo);
			int equipo_cod = Integer.parseInt(request.getParameter("equipo_cod"));
			List<Jugador> jugadores = equipoBO.consultarJugadores(equipo_cod);
			request.setAttribute("jugadores", jugadores);
			pagina = "jugadores.jsp";
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
