package com.hibernate.main;

import org.hibernate.Session;
import org.hibernate.Transaction;

import com.hibernate.config.HibernateUtil;
import com.hibernate.entities.Libro;

public class Main {
	public static void main(String[] args) {
		Session session = HibernateUtil.getSessionFactory().openSession();
		Transaction transaction = session.beginTransaction();
		Libro l = new Libro();
		l.setTitulo("El Quijote");

		session.save(l);
		transaction.commit();
		session.close();
	}
}
