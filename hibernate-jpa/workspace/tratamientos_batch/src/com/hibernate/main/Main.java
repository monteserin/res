package com.hibernate.main;

import org.hibernate.Session;
import org.hibernate.Transaction;

import com.hibernate.config.HibernateUtil;
import com.hibernate.entities.Libro;

public class Main {
	public static void main(String[] args) {

		Session session = HibernateUtil.getSessionFactory().openSession();
		Transaction tx = session.beginTransaction();

		for (int i = 0; i < 100000; i++) {
			Libro l = new Libro();
			l.setTitulo("El Quijote " + i);

			session.save(l);
			if (i % 20 == 0) { // 20, same as the JDBC batch size
				// flush a batch of inserts and release memory:
				session.flush();
				session.clear();
			}
		}

		tx.commit();
		session.close();

	}
}
