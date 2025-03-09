package siniestro;

import java.util.Iterator;
import java.util.List;

import javax.persistence.TypedQuery;

import org.hibernate.Session;

public class Main2 {

	public static void main(String[] args) {
		Session session = HibernateUtil.getSessionFactory().openSession();

		System.out.println("Listar las matrículas de todos los vehículos.");
		TypedQuery<String> hqlQuery1 = session.createQuery("SELECT v.matricula FROM  Vehiculo v");
		List<String> matriculas = hqlQuery1.getResultList(); 
		
		Iterator<String> it = matriculas.iterator();
		while(it.hasNext()) {
			String matricula = it.next();
			System.out.println(matricula);
		}
		
		
		
		System.out.println("Listar la matrícula y la marca de todos los vehículos ordenados por número de ruedas.\r\n"
				+ "");
		TypedQuery<Vehiculo> hqlQuery2 = session.createQuery("SELECT v FROM  Vehiculo v ORDER BY ruedas DESC"); // ASC
		List<Vehiculo> vehiculos = hqlQuery2.getResultList(); 
		
		Iterator<Vehiculo> it2 = vehiculos.iterator();
		while(it2.hasNext()) {
			Vehiculo vehiculo = it2.next();
			System.out.println(vehiculo.getMatricula() + " - " + vehiculo.getMarca() +" - " + vehiculo.getRuedas());
		}
		
		
		
		System.out.println("Listar la matrícula de todos los vehículos que tengan más de dos asientos y más de dos ruedas.");
		TypedQuery<Vehiculo> hqlQuery3 = session.createQuery("SELECT v FROM  Vehiculo v WHERE v.asientos>2 AND v.ruedas >2"); // ASC
		List<Vehiculo> vehiculos3 = hqlQuery3.getResultList(); 
		
		Iterator<Vehiculo> it3 = vehiculos3.iterator();
		while(it3.hasNext()) {
			Vehiculo vehiculo = it3.next();
			System.out.println(vehiculo.getAsientos() + " - " + vehiculo.getMarca() +" - " + vehiculo.getRuedas());
		}
		
		
		
		System.out.println("Listar la matrícula de todos los vehículos que tengan más de dos asientos o más de dos ruedas.");
		TypedQuery<Vehiculo> hqlQuery4 = session.createQuery("SELECT v FROM  Vehiculo v WHERE v.asientos>2 OR v.ruedas >2"); // ASC
		List<Vehiculo> vehiculos4 = hqlQuery4.getResultList(); 
		
		Iterator<Vehiculo> it4 = vehiculos4.iterator();
		while(it4.hasNext()) {
			Vehiculo vehiculo = it4.next();
			System.out.println(vehiculo.getAsientos() + " - " + vehiculo.getMarca() +" - " + vehiculo.getRuedas());
		}
		
		
		System.out.println("Listar la matrícula de todos los vehículos que tengan una matrícula de menos de seis caracteres (where length(v.matricula)<?).");
		TypedQuery<Vehiculo> hqlQuery5 = session.createQuery("SELECT v FROM  Vehiculo v WHERE  length(v.matricula)<6"); // ASC
		List<Vehiculo> vehiculos5 = hqlQuery5.getResultList(); 
		
		Iterator<Vehiculo> it5 = vehiculos5.iterator();
		while(it5.hasNext()) {
			Vehiculo vehiculo = it5.next();
			System.out.println(vehiculo.getAsientos() + " - " + vehiculo.getMatricula() +" - " + vehiculo.getRuedas());
		}
		
		
		
		System.out.println("Listar la matrícula de todos los vehículos que hayan tenido un siniestro con perdida mayor de 1000 euros.");
		TypedQuery<Vehiculo> hqlQuery6 = session.createQuery("SELECT v FROM  Vehiculo v JOIN v.siniestros s WHERE s.perdida>1000"); // ASC
		List<Vehiculo> vehiculos6 = hqlQuery6.getResultList(); 
		
		Iterator<Vehiculo> it6 = vehiculos6.iterator();
		while(it6.hasNext()) {
			Vehiculo vehiculo = it6.next();
			System.out.println(vehiculo.getAsientos() + " - " + vehiculo.getMatricula() +" - " + vehiculo.getRuedas());
		}
		
		
		
		System.out.println("Listar la matrícula de todos los vehículos que hayan tenido un siniestro con perdida mayor de 1000 euros. Mostrar a cuanto ascendió la pérdida.");
		TypedQuery<VehiculoPerdida> hqlQuery7 = session.createQuery("SELECT new siniestro.VehiculoPerdida(v, s.perdida) FROM  Vehiculo v JOIN v.siniestros s WHERE s.perdida>1000"); // ASC
		List<VehiculoPerdida> vehiculos7 = hqlQuery7.getResultList(); 
		
		Iterator<VehiculoPerdida> it7 = vehiculos7.iterator();
		while(it7.hasNext()) {
			VehiculoPerdida r = it7.next();
			System.out.println(r.getVehiculo().getMatricula()+ " - " + r.getPerdida());
		}
		session.close();
	}

}
