package libros;

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
		String pagina = "listado.jsp";
		LibroBO libroBO = new LibroBO();
		String action =  request.getParameter("action");
		if(action != null) {
			if(action.equals("alta")) {
				String titulo = request.getParameter("titulo");
				String precio = request.getParameter("precio");
				int precioInt = Integer.parseInt(precio);
				Libro libro = new Libro();
				libro.setTitulo(titulo);
				libro.setPrecio(precioInt);
				libroBO.alta(libro);
			}else if(action.equals("baja")) {
				String id = request.getParameter("idextra");
				int idInt = Integer.parseInt(id);
				Libro libro = new Libro();
				libro.setId(idInt);
				libroBO.baja(libro);
			}else if(action.equals("modificar")) {
				String id = request.getParameter("idextra");
				int idInt = Integer.parseInt(id);
				String titulo = request.getParameter("titulo");
				String precio = request.getParameter("precio");
				int precioInt = Integer.parseInt(precio);
				Libro libro = new Libro();
				libro.setId(idInt);
				libro.setTitulo(titulo);
				libro.setPrecio(precioInt);
				libroBO.modificar(libro);
				
			}
			
		}
		
		List<Libro> libros = libroBO.consultarLibros();
		request.setAttribute("libros", libros);
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
