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

public class AsignaturaBO {
	public void insertAsignatura(Asignatura a) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		em.getTransaction().begin();
		AsignaturaDAO asignaturaDAO = new AsignaturaDAO();
		asignaturaDAO.insert(em, a);
		em.getTransaction().commit();
		em.close();
	}

	public List<Asignatura> listAsignaturas() {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		AsignaturaDAO asignaturaDAO = new AsignaturaDAO();
		List<Asignatura> asignaturas = asignaturaDAO.get(em);
		em.close();
		return asignaturas;
	}

	public List<Asignatura> listAsignaturasByProfesor(int idProfesor) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		AsignaturaDAO asignaturaDAO = new AsignaturaDAO();
		List<Asignatura> asignaturas = asignaturaDAO.getByProfesorId(em, idProfesor);
		em.close();
		return asignaturas;
	}
	
	public List<Asignatura> listAsignaturasByAlumno(int idAlumno) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		AsignaturaDAO asignaturaDAO = new AsignaturaDAO();
		List<Asignatura> asignaturas = asignaturaDAO.get(em);
		em.close();
		return asignaturas;
	}
	
	public void removeAsignatura(int id) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		AsignaturaDAO asignaturaDAO = new AsignaturaDAO();
		em.getTransaction().begin();
		asignaturaDAO.remove(em, id);
		em.getTransaction().commit();
		em.close();
	}
	
	public void updateAsignatura(int idAsignatura, String nombre) {
		EntityManager em = EntityManagerSingleton.getEntityManager();
		AsignaturaDAO asignaturaDAO = new AsignaturaDAO();
		
		Asignatura a = asignaturaDAO.getById(em,idAsignatura);
		a.setNombre(nombre);
		
		
		em.getTransaction().begin();
		asignaturaDAO.update(em, a);
		em.getTransaction().commit();
		em.close();
	}
}
