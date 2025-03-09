package com.pablomonteserin.conexionBD;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class G_mantenimiento {
	
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
	public void insertarRegistro(String dni, String nombre, int edad){
		try {
			Connection conn = getConnection();
			Statement stm = conn.createStatement();
			stm.executeUpdate("INSERT INTO prueba VALUES('"+dni+"', '"+nombre+"', '"+edad+"')");
			stm.close();
			conn.close();
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}

	public static void main(String[] args) {		
		G_mantenimiento e_ejercicioIV = new G_mantenimiento();
		e_ejercicioIV.insertarRegistro("1safasd", "nombreUlt", 8);
	}

}
