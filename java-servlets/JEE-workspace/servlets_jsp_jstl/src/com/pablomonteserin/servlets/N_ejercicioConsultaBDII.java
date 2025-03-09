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

import com.pablomonteserin.model.L_helper;
import com.pablomonteserin.model.Libro;

public class N_ejercicioConsultaBDII extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    public N_ejercicioConsultaBDII() {
        super();
    }


	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		try {
			PrintWriter writer = response.getWriter();
			
			String action = request.getParameter("action");	
			Libro libro = new Libro();
			libro.setIsbn(request.getParameter("isbn"));
			libro.setTitulo(request.getParameter("titulo"));
			libro.setPrecio(Double.parseDouble(request.getParameter("precio")));
			
			if(action.equals("insert")){
				L_helper.insertarRegistro(libro);
			}else if(action.equals("update")){
				L_helper.actualizarRegistro(libro);
			}else if(action.equals("select")){
				Collection collection = L_helper.consultarRegistros();
				Iterator<Libro> it = collection.iterator();
				Libro libroProvisional;
				while(it.hasNext()){
					libroProvisional = new Libro();
					libroProvisional = it.next();
					writer.print(libroProvisional.getIsbn());
					writer.print(libroProvisional.getTitulo());
					writer.print(libroProvisional.getPrecio());
				}
				
			}else if(action.equals("delete")){
				L_helper.eliminarRegistro(libro.getIsbn());
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
	}

}
