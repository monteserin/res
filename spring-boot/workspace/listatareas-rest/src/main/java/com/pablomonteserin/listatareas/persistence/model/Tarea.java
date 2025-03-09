package com.pablomonteserin.listatareas.persistence.model;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;

import com.fasterxml.jackson.annotation.JsonView;

@Entity
public class Tarea {

	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)	
	private Integer id;
	@JsonView
	private String txt;
	
	@ManyToOne
	private Usuario usuario;
	

	public Integer getId() {
		return id;
	}
	public void setId(Integer id) {
		this.id = id;
	}
	protected String getTxt() {
		return txt;
	}
	protected void setTxt(String txt) {
		this.txt = txt;
	}
	protected Usuario getUsuario() {
		return usuario;
	}
	protected void setUsuario(Usuario usuario) {
		this.usuario = usuario;
	}
	

	
	
}
