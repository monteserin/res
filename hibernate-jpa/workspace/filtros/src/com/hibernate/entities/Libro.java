package com.hibernate.entities;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.ManyToOne;

import org.hibernate.annotations.Filter;
import org.hibernate.annotations.FilterDef;
import org.hibernate.annotations.FilterDefs;
import org.hibernate.annotations.Filters;
import org.hibernate.annotations.ParamDef;

@FilterDefs({
	@FilterDef(name = "priceFilter",
		parameters = {
			@ParamDef(name="minPrice", type="java.lang.Integer"),
			@ParamDef(name="maxPrice", type="java.lang.Integer")

		}
	),
	@FilterDef(name = "letraFilter",
		parameters = {
			@ParamDef(name="letraParam", type="java.lang.String"),
		}
	)
})

@Filters({
	@Filter(name = "priceFilter", condition = "precio >= :minPrice and precio <= :maxPrice"),
	@Filter(name = "letraFilter",
		condition = "titulo LIKE :letraParam")
})

@Entity
public class Libro {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY) // Para generar números autoincrementados
	private int id;
	private String titulo;
	private int precio;
    @ManyToOne
    // Anotación opcional, permite especificar el nombre de la join column
    // @JoinColumn (name = "autor_id")
	private Autor autor;

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getTitulo() {
		return titulo;
	}

	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}
	
	

	public int getPrecio() {
		return precio;
	}

	public void setPrecio(int precio) {
		this.precio = precio;
	}

	public Autor getAutor() {
		return autor;
	}

	public void setAutor(Autor autor) {
		this.autor = autor;
	}

}
