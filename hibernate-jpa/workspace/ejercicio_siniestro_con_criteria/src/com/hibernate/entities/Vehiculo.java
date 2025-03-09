package com.hibernate.entities;

import java.util.Set;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;

@Entity
public class Vehiculo {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY) // Para generar números autoincrementados
	private int id;
	private String matricula;
	private int asientos;
	private int ruedas;
	private String marca;
	// CascadeType.ALL: Los datos se borrarán y se salvarán en cascada
	// orphanRemoval: si borro en cascada y queda algún registro hijo sin padre, cárgatelos también
    @OneToMany (mappedBy = "vehiculo", cascade = {CascadeType.ALL}, orphanRemoval = true) 
    private Set<Siniestro> siniestros;
    
    
	public Vehiculo(String matricula, int asientos, int ruedas, String marca) {
		super();
		this.matricula = matricula;
		this.asientos = asientos;
		this.ruedas = ruedas;
		this.marca = marca;
	}
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public String getMatricula() {
		return matricula;
	}
	public void setMatricula(String matricula) {
		this.matricula = matricula;
	}
	public int getAsientos() {
		return asientos;
	}
	public void setAsientos(int asientos) {
		this.asientos = asientos;
	}
	public int getRuedas() {
		return ruedas;
	}
	public void setRuedas(int ruedas) {
		this.ruedas = ruedas;
	}
	public String getMarca() {
		return marca;
	}
	public void setMarca(String marca) {
		this.marca = marca;
	}
	public Set<Siniestro> getSiniestros() {
		return siniestros;
	}
	public void setSiniestros(Set<Siniestro> siniestros) {
		this.siniestros = siniestros;
	}

	
    
	
}
