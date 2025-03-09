package com.hibernate.entities;

import java.util.Date;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.ManyToOne;

@Entity
public class Siniestro {
	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)//Para generar números autoincrementados
	private int id;
	
	private Date fecha;
	private int perdida;
	
	@ManyToOne 
	private Vehiculo vehiculo;


	public Siniestro(Date fecha, int perdida, Vehiculo vehiculo) {
		super();
		this.fecha = fecha;
		this.perdida = perdida;
		this.vehiculo = vehiculo;
	}

	public int getPerdida() {
		return perdida;
	}

	public void setPerdida(int perdida) {
		this.perdida = perdida;
	}

	
	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public Date getFecha() {
		return fecha;
	}

	public void setFecha(Date fecha) {
		this.fecha = fecha;
	}

	public Vehiculo getVehiculo() {
		return vehiculo;
	}

	public void setVehiculo(Vehiculo vehiculo) {
		this.vehiculo = vehiculo;
	}

	

}
