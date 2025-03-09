package escuela;

import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import org.hibernate.Session;
import org.hibernate.Transaction;

public class Main {
	public static void main(String[] args) {
		Session session = HibernateUtil.getSessionFactory().openSession();
		Transaction transaction = session.beginTransaction();
		Profesor profesor = new Profesor();
		List<Curso> cursos = new ArrayList<>();
		
		
		
		cursos.add(new Curso("Programacion", new Date(),700,profesor));
		cursos.add(new Curso("Lengua",new Date(),700,profesor));
		profesor.setCursos(cursos);
		profesor.setNombre("Jorge");
		profesor.setApellido("Ruiz");
		profesor.setAniosExperiencia(1);
		
		session.save(profesor);
		transaction.commit();
		session.close();
	}
}
