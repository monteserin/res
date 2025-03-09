package com.hibernate.entities;

import java.util.Set;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;

@Entity

// Anotación opcional, permite especificar el nombre de la tabla vinculada a esta entidad en la base de datos
// @Table(name = "autorcillo")  
public class Autor {
	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)//Para generar números autoincrementados
	private int id;
	
	//Anotación opcional, permite easpecificar el nombre d ela tabla en la base de datos, los caracteres que tendrá y si acepta valores nulos
	//@Column (name = "nombrecillo", length = 100, nullable = true)
	private String nombre;
	
	// mappedBy especifica el atributo de la entidad vinculada con el que estamos estableciendo esta relacion.
	//Si no lo ponemos se gererará una tabla auxiliar.
	@OneToMany (mappedBy = "autor") 
	private Set<Publicacion> publicaciones;

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

	public Set<Publicacion> getPublicaciones() {
		return publicaciones;
	}

	public void setPublicaciones(Set<Publicacion> publicaciones) {
		this.publicaciones = publicaciones;
	}


}
