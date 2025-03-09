package com.pablomonteserin.personaFisicaJuridica_conArray;

import java.util.Date;

public class PersonaFisica extends Persona {
	private String dni;
	private Date fechaNacimiento;
	public String getDni() {
		return dni;
	}
	public void setDni(String dni) {
		this.dni = dni;
	}
	public Date getFechaNacimiento() {
		return fechaNacimiento;
	}
	public void setFechaNacimiento(Date fechaNacimiento) {
		this.fechaNacimiento = fechaNacimiento;
	}
	public PersonaFisica(String nombre, String dni, Date fechaNacimiento) {
		super(nombre);
		this.dni = dni;
		this.fechaNacimiento = fechaNacimiento;
	}
	public PersonaFisica(String nombre) {
		super(nombre);
		// TODO Auto-generated constructor stub
	}

}
