package com.hibernate.main;

import java.util.List;

import org.hibernate.Filter;
import org.hibernate.Session;
import org.hibernate.Transaction;
import org.hibernate.query.Query;

import com.hibernate.config.HibernateUtil;
import com.hibernate.entities.Libro;

public class Main {
	public static void main(String[] args) {
		Session session = HibernateUtil.getSessionFactory().openSession();
		Transaction transaction = session.beginTransaction();
		
		
		
		Libro l = new Libro();
		l.setTitulo("El Quijote");
		l.setPrecio(500);

		session.save(l);
		transaction.commit();
			
		/*
		Filter priceFilter = session.enableFilter("priceFilter");
		priceFilter.setParameter("minPrice", -5);
		priceFilter.setParameter("maxPrice", 400);
		*/
		
		
		Filter letraFilter = session.enableFilter("letraFilter");
		letraFilter.setParameter("letraParam", "%e%");
		
		Query query1 = session.createQuery("SELECT l from Libro l");
		

		List<Libro> libros = query1.list();
		//session.disableFilter("priceFilter");
		session.disableFilter("letraFilter");

		for(Libro libro : libros) {
			System.out.println(libro.getTitulo());
		}
		session.close();
		
		
	}
}
