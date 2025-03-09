package com.pablomonteserin.conexionBD;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Collection;
import java.util.Iterator;


public class T_selectConBean {

	public static void main(String[] args) {
		// Load the driver
		try {
			// Load the driver class
			Class.forName("com.mysql.jdbc.Driver");
			// Define the data source for the driver
			String sourceURL = "jdbc:mysql://localhost/pruebas";
			// Create a connection through the DriverManager
			Connection databaseConnection = DriverManager.getConnection(sourceURL, "root", "pp");
			Statement stm = databaseConnection.createStatement();
			ResultSet personas = stm.executeQuery("SELECT * FROM prueba");
			
			Collection collection = new ArrayList();
			Persona persona = null;
			while (personas.next()){
				persona = new Persona();
				persona.setDni(personas.getString("dni"));
				persona.setNombre(personas.getString("nombre"));
				persona.setEdad(personas.getString("edad"));				
				collection.add(persona);
			}
			Iterator <Persona>it = collection.iterator();
			while(it.hasNext()){
				persona = it.next();
				System.out.println("******** PERSONA *********");
				System.out.println("dni: " + persona.getDni());
				System.out.println("nombre: " + persona.getNombre());
				System.out.println("direccion: " + persona.getEdad());
			}
			personas.close();
			stm.close();
			databaseConnection.close();
		} catch (ClassNotFoundException cnfe) {
			System.err.println(cnfe);
		} catch (SQLException sqle) {
			System.err.println(sqle);
		}
	}

}
