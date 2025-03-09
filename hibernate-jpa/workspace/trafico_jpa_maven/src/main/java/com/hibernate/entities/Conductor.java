package com.hibernate.entities;

import java.util.List;

import javax.persistence.Entity;
import javax.persistence.OneToMany;

@Entity
public class Conductor extends Persona {
	private int saldoPuntos;
	
	@OneToMany
	private List <Sancion> sanciones;
	
	public List<Sancion> getSanciones() {
		return sanciones;
	}
	public void setSanciones(List<Sancion> sanciones) {
		this.sanciones = sanciones;
	}
	public int getSaldoPuntos() {
		return saldoPuntos;
	}
	public void setSaldoPuntos(int saldoPuntos) {
		this.saldoPuntos = saldoPuntos;
	}
	
	
}
