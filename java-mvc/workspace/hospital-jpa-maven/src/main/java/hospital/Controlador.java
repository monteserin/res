package hospital;

import java.io.IOException;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
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
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		String pagina = "index.html";
		PacienteBO pacienteBO = new PacienteBO();
		String action = request.getParameter("action");
		if (action.equals("consultar_pacientes")) {
			List<Paciente> pacientes = pacienteBO.consultarPacientes();
			request.setAttribute("pacientes", pacientes);
			pagina = "consulta.jsp";
		} else if (action.equals("consulta_paciente_por_id")) {
			int id = Integer.parseInt(request.getParameter("id"));
			Paciente paciente = pacienteBO.consultarPacientePorId(id);
			request.setAttribute("paciente", paciente);
			pagina = "paciente.jsp";
		} else if (action.equals("alta")) {
			Date fecha_alta_date;
			try {
				String nombre = request.getParameter("nombre");
				String apellidos = request.getParameter("apellidos");
				String fecha_alta = request.getParameter("fecha_alta");
				SimpleDateFormat s = new SimpleDateFormat("yyyy-MM-dd");
				fecha_alta_date = s.parse(fecha_alta);
				Paciente paciente = new Paciente();
				paciente.setNombre(nombre);
				paciente.setApellidos(apellidos);
				paciente.setFecha_alta(fecha_alta_date);
				pacienteBO.altaPaciente(paciente);
			} catch (ParseException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		}else if(action.equals("modificacion")) {
			String nombre = request.getParameter("nombre");
			String apellidos = request.getParameter("apellidos");
			int id = Integer.parseInt(request.getParameter("identification"));
			String fecha_alta = request.getParameter("fecha_alta");
			SimpleDateFormat s = new SimpleDateFormat("yyyy-MM-dd");
			Date fecha=null;
			try {
				 fecha = s.parse(fecha_alta);
			} catch (ParseException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			Paciente paciente = new Paciente();
			paciente.setId(id);
			paciente.setNombre(nombre);
			paciente.setApellidos(apellidos);
			paciente.setFecha_alta(fecha);
			pacienteBO.actualizar(paciente);
		}else if(action.equals("baja")) {
			String identification = request.getParameter("identification");
			int id = Integer.parseInt(identification);	
			pacienteBO.borrar(id);
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
