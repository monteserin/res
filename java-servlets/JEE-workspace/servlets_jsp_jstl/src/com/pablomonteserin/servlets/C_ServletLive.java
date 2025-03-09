package com.pablomonteserin.servlets;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class C_ServletLive extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    public C_ServletLive() {
        super();
        System.out.println("Constructor");
    }
    @Override
    public void init() throws ServletException {
    	System.out.println("Inicio");
    	super.init();
    }
    @Override
    public void service(ServletRequest arg0, ServletResponse arg1)
    		throws ServletException, IOException {
    	// TODO Auto-generated method stub
    	System.out.println("Service");
    	super.service(arg0, arg1);
    }
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		System.out.println("doGet");
		destroy();
	}
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	}
	@Override
	public void destroy() {
		System.out.println("Fin");
		super.destroy();
	}
}
