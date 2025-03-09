package com.hibernate.main;

import org.hibernate.Session;
import org.hibernate.Transaction;

import com.hibernate.config.HibernateUtil;
import com.hibernate.entities.Autor;
import com.hibernate.entities.Direccion;
import com.hibernate.entities.Libro;

public class Main {
	public static void main(String[] args) {
		Session session = HibernateUtil.getSessionFactory().openSession();
		Transaction transaction = session.beginTransaction();
		Autor a = new Autor();
		
		Direccion d = new Direccion();
		d.setCalle("calle1");
		d.setNumero(3);
		d.setPiso(5);
		d.setPuerta(4);
		a.setDireccion(d);
		
		a.setNombre("Juan");

		session.save(a);
		transaction.commit();
		session.close();
	}
}
