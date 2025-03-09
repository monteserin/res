package configuracionanotaciones.util.entities;

import java.util.List;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;

@Entity
//Anotación opcional, permite especificar el nombre de la tabla vinculada a esta entidad en la base de datos
//@Table(name = "autorcillo")  
public class Autor {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY) // Para generar números autoincrementados
	private int id;

	// Anotación opcional, permite easpecificar el nombre d ela tabla en la base de
	// datos, los caracteres que tendrá y si acepta valores nulos
	// @Column (name = "nombrecillo", length = 100, nullable = true)
	private String nombre;

	// mappedBy especifica el atributo de la entidad vinculada con el que estamos
	// estableciendo esta relacion.
	// Si no lo ponemos se gererará una tabla auxiliar.
	// CascadeType.ALL: Los datos se borrarán y se salvarán en cascada
	// orphanRemoval: si borro en cascada y queda algún registro hijo sin padre,
	// cárgatelos también
	// eager = carga ansiosa
	@OneToMany(mappedBy = "autor", cascade = { CascadeType.ALL }, orphanRemoval = true, fetch = FetchType.EAGER)
	private List<Libro> libros;

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

	public List<Libro> getLibros() {
		return libros;
	}

	public void setLibros(List<Libro> libros) {
		this.libros = libros;
	}

	// Los getters y setters

}