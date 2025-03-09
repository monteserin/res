package siniestro;

import java.util.List;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;

@Entity
public class Vehiculo {

	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	private int id;
	
	private String matricula;
	private int asientos;
	private int ruedas;
	private String marca;
	
	@OneToMany (mappedBy = "vehiculo", cascade = {CascadeType.ALL}, orphanRemoval = true, fetch = FetchType.EAGER) 
	List<Siniestro> siniestros;

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

	public List<Siniestro> getSiniestros() {
		return siniestros;
	}

	public void setSiniestros(List<Siniestro> siniestros) {
		this.siniestros = siniestros;
	}
	
	
}
