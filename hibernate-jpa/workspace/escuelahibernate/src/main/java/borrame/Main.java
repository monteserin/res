package borrame;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.Iterator;
import java.util.List;

public class Main {

	public static void main(String[] args) throws IOException {
		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		Servicio servicio = new Servicio();

		boolean estamosHaciendoCosas = true;
		while (estamosHaciendoCosas) {
			System.out.println("¿Que operacion desea realizar?");
			System.out.println("1. Alta");
			System.out.println("2. Baja");
			System.out.println("3. Modificacion");
			System.out.println("4. Consulta");
			System.out.println("5. Salir");

			String opt = br.readLine();

			if (opt.equals("1")) {
				System.out.println("Introduzca el nombre del alumno");
				String nombre = br.readLine();
				System.out.println("Introduzca la edad del alumno");
				String edadStr = br.readLine();
				int edad = Integer.parseInt(edadStr);
				Alumno a = new Alumno();
				a.setNombre(nombre);
				a.setEdad(edad);
				servicio.alta(a);

			} else if (opt.equals("2")) {
				System.out.println("Introduzca la id del alumno que quiere eliminar");
				String idStr = br.readLine();
				int id = Integer.parseInt(idStr);
				servicio.borrado(id);
			} else if (opt.equals("3")) {

				System.out.println("Introduzca la id del alumno que quiere modificar");
				String idStr = br.readLine();
				int id = Integer.parseInt(idStr);
				
				System.out.println("Introduzca el nombre del alumno");
				String nombre = br.readLine();
				System.out.println("Introduzca la edad del alumno");
				String edadStr = br.readLine();
				int edad = Integer.parseInt(edadStr);
				Alumno a = new Alumno();
				a.setNombre(nombre);
				a.setEdad(edad);
				a.setId(id);
				servicio.modificacion(a);
				
			} else if (opt.equals("4")) {
				List<Alumno> alumnos = servicio.consulta();
				Iterator<Alumno> it = alumnos.iterator();
				while (it.hasNext()) {
					Alumno a = it.next();
					System.out.println(a.getId() + " - " + a.getNombre() + " - " + a.getEdad());
				}
			} else {
				estamosHaciendoCosas = false;
			}
		}

	}

}
