package configuracionanotaciones.main;

import org.hibernate.Session;
import org.hibernate.Transaction;

import configuracionanotaciones.util.HibernateUtil;
import configuracionanotaciones.util.entities.Autor;

public class Main {
	public static void main(String[] args) {
		Session session = HibernateUtil.getSessionFactory().openSession();
		Transaction transaction = session.beginTransaction();
		Autor a = new Autor();
		a.setNombre("Juan");

		session.save(a);
		transaction.commit();
		session.close();
	}
}
