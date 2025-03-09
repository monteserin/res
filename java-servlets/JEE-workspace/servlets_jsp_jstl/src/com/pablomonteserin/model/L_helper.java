package com.pablomonteserin.model;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Collection;


public class L_helper {
	Connection connection = null;
	

	public static void insertarRegistro(Libro libro) throws SQLException{
		Connection conn = Conexion.getConnection();
		PreparedStatement pstmt = conn.prepareStatement("INSERT INTO libro VALUES (?,?,?)");
		pstmt.setString(1, libro.getIsbn());
		pstmt.setString(2, libro.getTitulo());
		pstmt.setDouble(3, libro.getPrecio());
		pstmt.execute();
		pstmt.close();

	}
	
	public static void eliminarRegistro(String isbn){
		
	}
	
	public static void actualizarRegistro(Libro libro){
		
	}
	
	public static Collection consultarRegistros(){
		Connection conn = Conexion.getConnection();
		ArrayList<Libro> librosArrayList = new ArrayList();
		Statement statement;
		try {
			statement = conn.createStatement();
			ResultSet librosResultSet = statement.executeQuery("SELECT * FROM libro");
			
			Libro libroProvisional;
			while (librosResultSet.next()){
				libroProvisional = new Libro();
				libroProvisional.setIsbn(librosResultSet.getString("isbn"));
				libroProvisional.setTitulo(librosResultSet.getString("titulo"));
				libroProvisional.setPrecio(librosResultSet.getDouble("precio"));
				librosArrayList.add(libroProvisional);
			}
			statement.close();
			conn.close();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return librosArrayList;
	}
}
