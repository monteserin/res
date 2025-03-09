package com.pablomonteserin.conexionBD;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class Inserccion_II {
	public void insertarRegistro(int dni, String nombre, int edad){
		Connection databaseConnection = null;
		try {
			Class.forName("com.mysql.jdbc.Driver");
			String sourceURL = "jdbc:mysql://localhost/pruebas";
			databaseConnection = DriverManager.getConnection(sourceURL, "root", "pp");
			Statement stm = databaseConnection.createStatement();
			stm.executeUpdate("INSERT INTO prueba VALUES('"+dni+"', '"+nombre+"', "+edad+")");
			stm.close();
			databaseConnection.close();
		} catch (ClassNotFoundException e) {
			e.printStackTrace();
		}
		catch (SQLException e) {
			e.printStackTrace();
		}
	}

	public static void main(String[] args) {		
		Inserccion_II f_mantenimiento = new Inserccion_II();
		f_mantenimiento.insertarRegistro(3, "nombre1", 9);
	}

}
