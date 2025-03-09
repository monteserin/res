package escuela.bo;

import java.util.List;

import javax.persistence.EntityManager;

import escuela.connection.EntityManagerSingleton;
import escuela.dao.AlumnoDAO;
import escuela.dao.AsignaturaDAO;
import escuela.dao.ProfesorDAO;
import escuela.entities.Alumno;
import escuela.entities.Asignatura;
import escuela.entities.Profesor;

public class AlumnoBO {
	public void insertAlumno(Alumno a) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		AlumnoDAO alumnoDAO = new AlumnoDAO();
		alumnoDAO.insert(em, a);
		em.getTransaction().commit();
		em.close();
	}

	public void vincularAlumnoAAsignatura(int idAlumno, int idAsignatura) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		Alumno alumno= em.find(Alumno.class, idAlumno);
		Asignatura asignatura = em.find(Asignatura.class, idAsignatura);
		alumno.getAsignaturas().add(asignatura);
		asignatura.getAlumnos().add(alumno);
		AlumnoDAO alumnoDAO = new AlumnoDAO();
		AsignaturaDAO asignaturaDAO = new AsignaturaDAO();

		em.getTransaction().begin();
		alumnoDAO.update(em, alumno);
		asignaturaDAO.update(em, asignatura);

		em.getTransaction().commit();
		em.close();
	}
	
	public List<Alumno> listAlumnos() {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		AlumnoDAO alumnoDAO = new AlumnoDAO();
		List<Alumno> alumnos= alumnoDAO.get(em);
		em.close();
		return alumnos;
	}
	
	public void removeAlumno(int id) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		AlumnoDAO alumnoDAO = new AlumnoDAO();
		em.getTransaction().begin();
		alumnoDAO.remove(em, id);
		em.getTransaction().commit();
		em.close();
	}

	public void updateAlumno(int idAlumno, String nombre) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		AlumnoDAO alumnoDAO = new AlumnoDAO();

		Alumno a = alumnoDAO.getById(em, idAlumno);
		a.setNombre(nombre);

		em.getTransaction().begin();
		alumnoDAO.update(em, a);
		em.getTransaction().commit();
		em.close();
	}
}
