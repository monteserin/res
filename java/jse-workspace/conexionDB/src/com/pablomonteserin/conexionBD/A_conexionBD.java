package com.pablomonteserin.conexionBD;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class A_conexionBD {

	public static void main(String[] args) {
		try {
			// Load the driver class
			Class.forName("com.mysql.jdbc.Driver");
			// Define the data source for the driver
			String sourceURL = "jdbc:mysql://localhost/test";
			// Create a connection through the DriverManager
			Connection databaseConnection = DriverManager.getConnection(sourceURL, "root", "pp");
			databaseConnection.close();
		} catch (ClassNotFoundException cnfe) {
			System.err.println(cnfe);
		} catch (SQLException sqle) {
			System.err.println(sqle);
		}
	}

}
