package test;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class Conexion {
	public Connection getConnection(){
		Connection databaseConnection=null;
		try {
		Class.forName("com.mysql.jdbc.Driver");
		// Define the data source for the driver
		String sourceURL = "jdbc:mysql://localhost/test";
		// Create a connection through the DriverManager

			databaseConnection = DriverManager.getConnection(sourceURL, "root", "pp");
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return databaseConnection;
	}
}
