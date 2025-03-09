package com.pablomonteserin.personaFisicaJuridica_conArrayList;

public class PersonaJuridica extends Persona {

	private String nif;
	private String direccionFiscal;
	public String getNif() {
		return nif;
	}
	public void setNif(String nif) {
		this.nif = nif;
	}
	public String getDireccionFiscal() {
		return direccionFiscal;
	}
	public void setDireccionFiscal(String direccionFiscal) {
		this.direccionFiscal = direccionFiscal;
	}
	public PersonaJuridica(String nombre, String nif, String direccionFiscal) {
		super(nombre);
		this.nif = nif;
		this.direccionFiscal = direccionFiscal;
	}
	public PersonaJuridica(String nombre) {
		super(nombre);
		// TODO Auto-generated constructor stub
	}

}
