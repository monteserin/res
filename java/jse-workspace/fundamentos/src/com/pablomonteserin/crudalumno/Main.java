package com.pablomonteserin.crudalumno;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.Iterator;

public class Main {

	public static void main(String[] args) throws NumberFormatException, IOException {
		ArrayList<Alumno> alumnos = new ArrayList<Alumno>();
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

		boolean programaActivo = true;

		do {
			System.out.println("¿Qué operación quieres hacer?");
			System.out.println("1 - Insertar un alumno");
			System.out.println("2 - Eliminar un alumno");
			System.out.println("3 - Modificar un alumno");
			System.out.println("4 - Consultar alumnos");
			System.out.println("5 - Terminar el programa");

			int opcion = Integer.parseInt(br.readLine());

			if (opcion == 1) {
				System.out.println("Introduce el nombre del alumno");
				String nombre =  br.readLine();
				System.out.println("Introduce la edad del alumno");
				int edad = Integer.parseInt(br.readLine());

				Alumno a = new Alumno();
				a.setNombre(nombre);
				a.setEdad(edad);
				alumnos.add(a);

			} else if (opcion == 2) {
				System.out.println("Introduce el nombre del alumno que quieres eliminar");
				String nombre = br.readLine();

				Iterator<Alumno> it = alumnos.iterator();

				while (it.hasNext()) {
					Alumno a = it.next();
					if (a.getNombre().equals(nombre)) {
						it.remove();
					}
				}
			} else if (opcion == 3) {
				System.out.println("Introduce el nombre del alumno que quieres modificar");
				String nombre = br.readLine();

				System.out.println("Introduce el nuevo nombre de este alumno");
				String nombre2 = br.readLine();
				System.out.println("Introduce la nueva edad de este alumno");
				int edad2 = Integer.parseInt( br.readLine());
				
				Iterator<Alumno> it = alumnos.iterator();

				while (it.hasNext()) {
					Alumno a = it.next();
					if (a.getNombre().equals(nombre)) {
						a.setNombre(nombre2);
						a.setEdad(edad2);
					}
				}
			} else if (opcion == 4) {
				for (Alumno a : alumnos) {
					System.out.println("Nombre: " + a.getNombre() + ", Edad: " + a.getEdad());
				}
			} else if (opcion == 5) {
				programaActivo = false;
			} else {
				System.out.println("No has escogido correctamente");
			}
		} while (programaActivo);

	}

}
