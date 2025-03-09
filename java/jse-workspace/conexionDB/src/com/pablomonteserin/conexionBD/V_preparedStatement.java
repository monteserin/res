package com.pablomonteserin.conexionBD;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Collection;
import java.util.Iterator;

public class V_preparedStatement {
	public static void main(String[] args) {
		try {
			Class.forName("com.mysql.jdbc.Driver");
			String sourceURL = "jdbc:mysql://localhost/personas";
			Connection databaseConnection = DriverManager.getConnection(sourceURL,"root", "pp");

			PreparedStatement pstmt = null;
			pstmt = databaseConnection
					.prepareStatement("INSERT INTO persona VALUES (?,?,?)");
			pstmt.setString(1, "dni5");
			pstmt.setString(2, "nombre1");
			pstmt.setString(3, "direccion1");
			pstmt.execute();
			pstmt.close();

		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
}
