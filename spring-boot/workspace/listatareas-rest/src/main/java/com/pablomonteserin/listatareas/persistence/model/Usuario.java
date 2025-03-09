package com.pablomonteserin.listatareas.persistence.model;

import java.util.List;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;

@Entity
public class Usuario {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY) // Para generar números autoincrementados
	private int id;
	private String nombre;
	@OneToMany (mappedBy = "usuario", cascade = {CascadeType.ALL}, orphanRemoval = true, fetch = FetchType.EAGER) 
	List<Tarea> tareas;




	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	protected List<Tarea> getTareas() {
		return tareas;
	}

	protected void setTareas(List<Tarea> tareas) {
		this.tareas = tareas;
	}

}
