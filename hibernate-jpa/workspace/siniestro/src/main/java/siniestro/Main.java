package siniestro;

import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import org.hibernate.Session;
import org.hibernate.Transaction;

public class Main {
	public static void main(String[] args) {
		Session session = HibernateUtil.getSessionFactory().openSession();
		Transaction transaction = session.beginTransaction();
		Vehiculo vehiculo = new Vehiculo();
		List<Siniestro> siniestros = new ArrayList<>();
		
		
		
		siniestros.add(new Siniestro(new Date(),100,vehiculo));
		siniestros.add(new Siniestro(new Date(),100,vehiculo));
		vehiculo.setSiniestros(siniestros);
		vehiculo.setMatricula("menos de mil");
		vehiculo.setAsientos(4);
		vehiculo.setRuedas(1);
		vehiculo.setMarca("Nissan");
		session.save(vehiculo);
		transaction.commit();
		session.close();
	}
}
