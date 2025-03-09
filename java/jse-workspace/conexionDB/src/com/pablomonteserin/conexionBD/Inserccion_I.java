package com.pablomonteserin.conexionBD;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class Inserccion_I {

	public static void main(String[] args) {
		// Load the driver
		try {
			// Load the driver class
			Class.forName("com.mysql.jdbc.Driver");
			// Define the data source for the driver
			String sourceURL = "jdbc:mysql://localhost/personas";
			// Create a connection through the DriverManager
			Connection databaseConnection = DriverManager.getConnection(sourceURL, "root", "pp");
			Statement stm = databaseConnection.createStatement();
			stm.executeUpdate("INSERT INTO persona VALUES('45683749Q', 'Pepe', 4)");
			stm.close();
			databaseConnection.close();
		} catch (ClassNotFoundException cnfe) {
			System.err.println(cnfe);
		} catch (SQLException sqle) {
			System.err.println(sqle);
		}
	}

}
