package com.pablomonteserin.servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Collection;
import java.util.Iterator;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.pablomonteserin.model.Conexion;

public class K_ejercicioConsultaBDI extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    public K_ejercicioConsultaBDI() {
        super();
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		try {
			response.setContentType("text/html");
			PrintWriter writer = response.getWriter();
			Connection conn = Conexion.getConnection();
						
			Statement statement = conn.createStatement();
			String campoConsulta = request.getParameter("titulo");
			ResultSet libros = statement.executeQuery("SELECT * FROM libro WHERE titulo='"+campoConsulta+"'");
			while (libros.next()){
				writer.println(libros.getString("isbn"));
				writer.println(libros.getString("titulo"));
				writer.println(libros.getString("precio"));
				writer.println("<br/><br/>");
			}
			statement.close();
			conn.close();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	}

}
