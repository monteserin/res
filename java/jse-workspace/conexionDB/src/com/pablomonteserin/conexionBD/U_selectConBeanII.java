package com.pablomonteserin.conexionBD;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Collection;
import java.util.Iterator;


public class U_selectConBeanII {

	public Connection getConnection(){
		Connection databaseConnection = null;
		try {
			Class.forName("com.mysql.jdbc.Driver");
			String sourceURL = "jdbc:mysql://localhost/pruebas";
			databaseConnection = DriverManager.getConnection(sourceURL, "root", "pp");
		} catch (ClassNotFoundException e) {
			e.printStackTrace();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}		
		return databaseConnection;
	}
	
	public Collection consultarTodo(Connection conn){
		Statement stm = null;
		Collection collection = null;
		try {
			stm = conn.createStatement();
			ResultSet personas = stm.executeQuery("SELECT * FROM prueba");
			
			collection = new ArrayList();
			Persona persona = null;
			while (personas.next()){
				persona = new Persona();
				persona.setDni(personas.getString("dni"));
				persona.setNombre(personas.getString("nombre"));
				persona.setEdad(personas.getString("edad"));				
				collection.add(persona);
			}
			stm.close();
			conn.close();

		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		return collection;
	}
	public static void main(String[] args) {
		U_selectConBeanII t_selectConBeanII = new U_selectConBeanII();
		Connection conn = t_selectConBeanII.getConnection();
		Collection collection = t_selectConBeanII.consultarTodo(conn);
		Iterator it = collection.iterator();
		while(it.hasNext()){
			Persona persona = (Persona) it.next();
			System.out.println(persona.getNombre());
		}
	}

}
