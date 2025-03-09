package com.hibernate.entities;

import java.util.Set;

import javax.persistence.CascadeType;
import javax.persistence.Embedded;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;

@Entity
// Anotaci�n opcional, permite especificar el nombre de la tabla vinculada a esta entidad en la base de datos
// @Table(name = "autorcillo")  
public class Autor {
	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)//Para generar n�meros autoincrementados
	private int id;
	
	//Anotaci�n opcional, permite easpecificar el nombre d ela tabla en la base de datos, los caracteres que tendr� y si acepta valores nulos
	//@Column (name = "nombrecillo", length = 100, nullable = true)
	private String nombre;
	
	// mappedBy especifica el atributo de la entidad vinculada con el que estamos estableciendo esta relacion.
	//Si no lo ponemos se gererar� una tabla auxiliar.
	// CascadeType.ALL: Los datos se borrar�n y se salvar�n en cascada
	// orphanRemoval: si borro en cascada y queda alg�n registro hijo sin padre, c�rgatelos tambi�n
	@OneToMany (mappedBy = "autor", cascade = {CascadeType.ALL}, orphanRemoval = true, fetch = FetchType.EAGER) 
	private Set<Libro> libros;

	@Embedded
	private Direccion direccion;
	
	
	
	public Direccion getDireccion() {
		return direccion;
	}

	public void setDireccion(Direccion direccion) {
		this.direccion = direccion;
	}

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

	public Set<Libro> getLibros() {
		return libros;
	}

	public void setLibros(Set<Libro> libros) {
		this.libros = libros;
	}

}
