package borrame;

import java.util.List;

import javax.persistence.TypedQuery;

import org.hibernate.Session;
import org.hibernate.Transaction;

public class Servicio {

	public void alta(Alumno alumno) {
		Session session = HibernateUtil.getSessionFactory().openSession();
		Transaction transaction = session.beginTransaction();		
		session.save(alumno);
		transaction.commit();
		session.close();
	}
	
	public void modificacion(Alumno alumno) {
		Session session = HibernateUtil.getSessionFactory().openSession();
		Transaction transaction = session.beginTransaction();		
		session.update(alumno);
		transaction.commit();
		session.close();
	}
	
	public void borrado(int id) {
		Session session = HibernateUtil.getSessionFactory().openSession();
		Transaction transaction = session.beginTransaction();		
		
		Alumno a = (Alumno) session.load(Alumno.class, id);
		session.delete(a);
		
		transaction.commit();
		session.close();
	}
	
	public List<Alumno> consulta() {
		Session session = HibernateUtil.getSessionFactory().openSession();
		
		TypedQuery<Alumno> hqlQuery = session.createQuery("FROM  Alumno");
		List<Alumno> alumnos = hqlQuery.getResultList();
		session.close();
		return alumnos;
	}
}
