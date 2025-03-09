package com.hibernate.main;

import java.util.List;
import java.util.Scanner;

import com.hibernate.entities.Conductor;
import com.hibernate.entities.Sancion;
import com.hibernate.entities.Agente;

import bo.ConductorBO;
import bo.SancionesBO;
import bo.AgenteBO;

public class Main {
	public static void main(String[] args) {
		while (true) {
			System.out.println("Qué operación deseas hacer?");
			System.out.println("1. Insertar un conductor");
			System.out.println("2. Insertar un agente");
			System.out.println("3. Insertar una sancion");
			
			System.out.println("6. Listar profesores");
			System.out.println("7. Listar alumnos");
			System.out.println("8. Listar agentes");
			
			System.out.println("9. Listar asignaturas de un profesor");
			System.out.println("10. Listar asignaturas de un alumno");

			System.out.println("11. Modificar profesor");
			System.out.println("12. Modificar alumno");
			System.out.println("13. Modificar asignatura");

			Scanner lector = new Scanner(System.in);
			int opt = lector.nextInt();
			if (opt == 1) {
				AgenteBO agenteBO = new AgenteBO();
				System.out.println("Inserta el nombre del Agente");
				String nombre = lector.next();
				Agente a = new Agente();
				a.setNombre(nombre);
				agenteBO.insertAgente(a);
			} else if (opt == 2) {
				System.out.println("Inserta el nombre del Conductor");
				String nombre = lector.next();
				Conductor c = new Conductor();
				c.setNombre(nombre);
				ConductorBO alumnoBO = new ConductorBO();
				alumnoBO.insertConductor(c);
			} else if (opt == 3) {
				System.out.println("Inserta el id de la sanción");
				int id = lector.nextInt();
				Sancion s = new Sancion();
				s.setId(id);
				SancionesBO sancionBO = new SancionesBO();
				sancionBO.insertSancion(s);
			} else if (opt == 4) {
				
			} else if (opt == 5) {
	
			} else if (opt == 6) {
AgenteBO agenteBO = new AgenteBO();
				List<Agente> agentes = agenteBO.listAgentes();
				for (Agente a : agentes) {
					System.out.println("Id: " + a.getId() + ", nombre: " + a.getNombre());
				}
			} else if (opt == 7) {
				ConductorBO alumnoBO = new ConductorBO();
				List<Conductor> conductores = alumnoBO.listConductores();
				for (Conductor c : conductores) {
					System.out.println(c.getNombre());
				}
			} else if (opt == 8) {
				SancionesBO sancionBO = new SancionesBO();
				List<Sancion> sanciones = sancionBO.listSanciones();
				for (Sancion s : sanciones) {
					System.out.println("Id: " + s.getId());
				}
			} else if (opt == 9) {
				System.out.println("Inserta la id del agente");
				int idProfesor = lector.nextInt();
				SancionesBO sancionBO = new SancionesBO();
				List<Sancion> sanciones = sancionBO.listSancionesByAgente(idProfesor);
				for (Sancion s : sanciones) {
					System.out.println("Id: " + s.getId());
				}
			} else if (opt == 10) {

			}
		}
	}
}
