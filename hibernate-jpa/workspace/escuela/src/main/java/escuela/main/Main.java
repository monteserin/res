package escuela.main;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.List;

import escuela.bo.AlumnoBO;
import escuela.bo.AsignaturaBO;
import escuela.bo.ProfesorBO;
import escuela.entities.Alumno;
import escuela.entities.Asignatura;
import escuela.entities.Profesor;

public class Main {

	public static void main(String[] args) throws IOException {
		ProfesorBO profesorBO = new ProfesorBO();
		AlumnoBO alumnoBO = new AlumnoBO();
		AsignaturaBO asignaturaBO = new AsignaturaBO();

		System.out.println("1. Insertar un profesor");
		System.out.println("2. Insertar un alumno");
		System.out.println("3. Insertar asignatura");
		System.out.println("4. Vincular profesor a asignatura");
		System.out.println("5. Vincular alumno a asignatura");
		System.out.println("6 Listar profesores");
		System.out.println("7 Listar alumnos  (mostrando sus faltas de asistencia.)");
		System.out.println("8 Listar asignaturas");
		System.out.println("9 Listar asignaturas de un profesor");
		System.out.println("10 Listar asignaturas de un alumno");
		System.out.println("11 Eliminar profesor");
		System.out.println("12 Eliminar alumno");
		System.out.println("13 Eliminar asignatura");
		System.out.println("14 Modificar profesor");
		System.out.println("15 Modificar alumno");
		System.out.println("16 Modificar asignatura");


		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		String opt = br.readLine();
		String nombre = "";
		String id = "";
		switch (opt) {
		case "1":
			System.out.println("Introduzca el nombre del profesor");
			nombre = br.readLine();
			Profesor p = new Profesor();
			p.setNombre(nombre);
			profesorBO.insertProfesor(p);
			break;

		case "2":
			System.out.println("Introduzca el nombre del alumno");
			nombre = br.readLine();
			Alumno a = new Alumno();
			a.setNombre(nombre);
			alumnoBO.insertAlumno(a);
			break;

		case "3":
			System.out.println("Introduzca el nombre de la asignatura");
			nombre = br.readLine();
			Asignatura asignatura = new Asignatura();
			asignatura.setNombre(nombre);
			asignaturaBO.insertAsignatura(asignatura);
			break;

		case "4":
			System.out.println("Introduzca la id del profesor");
			String idProfesor = br.readLine();

			System.out.println("Introduzca la id de la asignatura");
			String idAsignatura = br.readLine();

			profesorBO.vincularProfesorAAsignatura(Integer.parseInt(idProfesor), Integer.parseInt(idAsignatura));
			break;

		case "5":
			System.out.println("Introduzca la id del alumno");
			String idAlumno = br.readLine();

			System.out.println("Introduzca la id de la asignatura");
			String idAsignatura2 = br.readLine();

			alumnoBO.vincularAlumnoAAsignatura(Integer.parseInt(idAlumno), Integer.parseInt(idAsignatura2));
			break;

		case "6":
			List<Profesor> profesores = profesorBO.listProfesores();
			profesores.forEach(profesor -> System.out.println(profesor.getNombre()));

			break;

		case "7":
			List<Alumno> alumnos = alumnoBO.listAlumnos();
			alumnos.forEach(alumno -> System.out.println(alumno.getNombre() + " - " + alumno.getFaltasAsistencia()));

			break;

		case "8":
			List<Asignatura> asignaturas = asignaturaBO.listAsignaturas();
			asignaturas.forEach(alumno -> System.out.println(alumno.getNombre()));
			break;

		case "9":
			System.out.println("¿De que profesor quieres listar las asignaturas?");
			idProfesor = br.readLine();
			List<Asignatura> asignaturas2 = asignaturaBO.listAsignaturasByProfesor(Integer.parseInt(idProfesor));
			asignaturas2.forEach(alumno -> System.out.println(alumno.getNombre()));
			break;

		case "10":
			System.out.println("¿De que alumno quieres listar las asignaturas?");
			idAlumno = br.readLine();
			List<Asignatura> asignaturas3 = asignaturaBO.listAsignaturasByAlumno(Integer.parseInt(idAlumno));
			asignaturas3.forEach(alumno -> System.out.println(alumno.getNombre()));
			break;

		case "11":
			System.out.println("¿Que profesor quieres eliminar");
			idProfesor = br.readLine();
			profesorBO.removeProfesor(Integer.parseInt(idProfesor));
			break;

		case "12":
			System.out.println("¿Que alumno quieres eliminar");
			idAlumno = br.readLine();
			alumnoBO.removeAlumno(Integer.parseInt(idAlumno));
			break;
		case "13":
			System.out.println("¿Que asignatura quieres eliminar");
			idAsignatura = br.readLine();
			asignaturaBO.removeAsignatura(Integer.parseInt(idAsignatura));
			break;

		case "14":
			System.out.println("¿Cual es la id del profesor que quieres modificar?");
			idProfesor = br.readLine();

			System.out.println("¿Cual es el nuevo nombre del profesor?");
			nombre = br.readLine();

			profesorBO.updateProfesor(Integer.parseInt(idProfesor), nombre);
			break;
		case "15":
			System.out.println("¿Cual es la id del alumno que quieres modificar?");
			idAlumno = br.readLine();

			System.out.println("¿Cual es el nuevo nombre del alumno?");
			nombre = br.readLine();

			alumnoBO.updateAlumno(Integer.parseInt(idAlumno), nombre);
			break;
		case "16":
			System.out.println("¿Cual es la id de la asignatura que quieres modificar?");
			idAsignatura = br.readLine();

			System.out.println("¿Cual es el nuevo nombre de la asignatura?");
			nombre = br.readLine();

			asignaturaBO.updateAsignatura(Integer.parseInt(idAsignatura), nombre);
		}
	}
}
