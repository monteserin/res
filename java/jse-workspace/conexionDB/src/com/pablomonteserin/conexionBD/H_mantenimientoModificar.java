package com.pablomonteserin.conexionBD;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class H_mantenimientoModificar {
	
	public Connection getConnection(){
		Connection databaseConnection = null;
		try {
			Class.forName("com.mysql.jdbc.Driver");
			String sourceURL = "jdbc:mysql://localhost/personas";
			databaseConnection = DriverManager.getConnection(sourceURL, "root", "pp");
		} catch (ClassNotFoundException e) {
			e.printStackTrace();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}		
		return databaseConnection;
	}
	public void modificarRegistro(String dni, String nombre, int edad){
		try {
			Connection conn = getConnection();
			Statement stm = conn.createStatement();
			stm.executeUpdate("UPDATE prueba SET nombre='"+nombre+"', edad="+edad+" WHERE dni='"+dni+"'");
			stm.close();
			conn.close();
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
	public void insertarRegistro(String dni, String nombre, int edad){
		try {
			Connection conn = getConnection();
			Statement stm = conn.createStatement();
			stm.executeUpdate("INSERT INTO prueba VALUES('"+dni+"', '"+nombre+"', "+edad+")");
			stm.close();
			conn.close();
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
	public static void main(String[] args) {		
		H_mantenimientoModificar e_ejercicioIII = new H_mantenimientoModificar();
		Connection conn = e_ejercicioIII.getConnection();
		e_ejercicioIII.modificarRegistro("dni9", "nombre1", 3);
	}

}
