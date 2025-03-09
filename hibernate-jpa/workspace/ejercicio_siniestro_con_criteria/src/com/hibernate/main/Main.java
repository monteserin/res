package com.hibernate.main;

import java.util.Date;
import java.util.HashSet;
import java.util.List;
import java.util.Set;

import javax.persistence.criteria.CriteriaBuilder;
import javax.persistence.criteria.CriteriaQuery;
import javax.persistence.criteria.Root;

import org.hibernate.Session;
import org.hibernate.Transaction;

import com.hibernate.config.HibernateUtil;
import com.hibernate.entities.Siniestro;
import com.hibernate.entities.Vehiculo;

public class Main {
	public static void main(String[] args) {
		Session session = HibernateUtil.getSessionFactory().openSession();
		Transaction transaction = session.beginTransaction();
		Vehiculo vehiculo1 = new Vehiculo("matricula1", 5, 4, "marca1");
		Vehiculo vehiculo2 = new Vehiculo("matricula2", 3, 3, "marca2");

		Set<Siniestro> siniestrosVehiculo1 = new HashSet<Siniestro>();
		Set<Siniestro> siniestrosVehiculo2 = new HashSet<Siniestro>();

		siniestrosVehiculo1.add(new Siniestro(new Date(), 200, vehiculo1));
		siniestrosVehiculo1.add(new Siniestro(new Date(), 300, vehiculo1));

		siniestrosVehiculo2.add(new Siniestro(new Date(), 200, vehiculo2));

		vehiculo1.setSiniestros(siniestrosVehiculo1);
		vehiculo2.setSiniestros(siniestrosVehiculo2);

		session.save(vehiculo1);
		session.save(vehiculo2);

		transaction.commit();

		System.out.println("******************1. Listar las matrículas de todos los vehículos. ");
		CriteriaBuilder cb = session.getCriteriaBuilder(); // Este es el objeto al que le pasaré los where de la
															// consulta
		CriteriaQuery<Vehiculo> cq = cb.createQuery(Vehiculo.class);
		cq.from(Vehiculo.class);// Hace referencia a la raíz de la query (la tabla sobre al que vamos a actuar)

		List<Vehiculo> vehiculos = session.createQuery(cq).getResultList();

		for (Vehiculo v : vehiculos) {
			System.out.println(v.getMatricula());
		}

		System.out.println(
				"******************2. Listar la matrícula y la marca de todos los vehículos ordenados por número de ruedas");
		CriteriaQuery<Vehiculo> cq2 = cb.createQuery(Vehiculo.class);

		Root<Vehiculo> v2 = cq2.from(Vehiculo.class);// Hace referencia a la raíz de la query (la tabla sobre al que
														// vamos a actuar)
		cq.select(v2).where(cb.gt(v2.get("asientos"), 2));

		List<Vehiculo> vehiculos2 = session.createQuery(cq2).getResultList();

		for (Vehiculo v : vehiculos) {
			System.out.println("Matrícula: " + v.getMatricula() + ", Marca: " + v.getMarca());
		}

		System.out.println(
				"******************3. Listar la matrícula de todos los vehículos que tengan más de dos asientos y más de dos ruedas");
		CriteriaQuery<Vehiculo> cq3 = cb.createQuery(Vehiculo.class);

		Root<Vehiculo> v3 = cq3.from(Vehiculo.class);// Hace referencia a la raíz de la query (la tabla sobre al que
														// vamos a actuar)
		cq.select(v3).where(cb.gt(v3.get("asientos"), 2), cb.and(cb.gt(v3.get("ruedas"), 2)));

		List<Vehiculo> vehiculos3 = session.createQuery(cq3).getResultList();

		for (Vehiculo v : vehiculos3) {
			System.out.println(v.getMatricula());
		}

		System.out.println(
				"******************4. Listar la matrícula de todos los vehículos que tengan más de dos asientos o más de dos ruedas");
		CriteriaQuery<Vehiculo> cq4 = cb.createQuery(Vehiculo.class);

		Root<Vehiculo> v4 = cq4.from(Vehiculo.class);// Hace referencia a la raíz de la query (la tabla sobre al que
														// vamos a actuar)
		cq4.select(v4).where(cb.or(cb.gt(v4.get("asientos"), 2), cb.gt(v4.get("ruedas"), 2)));

		List<Vehiculo> vehiculos4 = session.createQuery(cq).getResultList();

		for (Vehiculo v : vehiculos4) {
			System.out.println(v.getMatricula());
		}

		System.out.println(
				"******************5. Listar la matrícula de todos los vehículos que tengan una matrícula de menos de seis caracteres (where length(v.matricula)<?).");
		CriteriaQuery<Vehiculo> cq5 = cb.createQuery(Vehiculo.class);

		Root<Vehiculo> v5 = cq5.from(Vehiculo.class);// Hace referencia a la raíz de la query (la tabla sobre al que
														// vamos a actuar)
		cq.select(v5).where(cb.lt(cb.length(v5.get("matricula")), 6));
		cq.orderBy(cb.asc(v5.get("titulo")), cb.asc(v5.get("edad")));

		List<Vehiculo> vehiculos5 = session.createQuery(cq5).getResultList();

		for (Vehiculo v : vehiculos5) {
			System.out.println(v.getMatricula());
		}

		System.out.println(
				"******************6. Listar la matrícula de todos los vehículos que hayan tenido un siniestro con perdida mayor de 1000 euros. Mostrar a cuanto ascendió la pérdida.");
		CriteriaQuery<Siniestro> cq6 = cb.createQuery(Siniestro.class);

		Root<Siniestro> s6 = cq6.from(Siniestro.class);// Hace referencia a la raíz de la query (la tabla sobre al que
														// vamos a actuar)

		cq6.select(s6).where(cb.gt(s6.get("perdida"), 1000));
		List<Siniestro> siniestros = session.createQuery(cq6).getResultList();

		for (Siniestro s : siniestros) {
			System.out.println("Matricula: "+ s.getVehiculo().getMatricula()+ ", Perdida: "+ s.getPerdida());
		}

		session.close();
	}
}
