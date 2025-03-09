package foro.entities;

import java.util.List;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;
import javax.persistence.OneToOne;

@Entity
public class Hilo {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int id;
	@OneToOne
	private Usuario usuario;
	private String nombre_hilo;
	private String txt_hilo;
	
	@OneToMany  (mappedBy = "hilo", cascade = {CascadeType.ALL}, orphanRemoval = true, fetch = FetchType.EAGER) 
	List<Comentario> comentarios;

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public Usuario getUsuario() {
		return usuario;
	}

	public void setUsuario(Usuario usuario) {
		this.usuario = usuario;
	}

	public String getNombre_hilo() {
		return nombre_hilo;
	}

	public void setNombre_hilo(String nombre_hilo) {
		this.nombre_hilo = nombre_hilo;
	}

	public String getTxt_hilo() {
		return txt_hilo;
	}

	public void setTxt_hilo(String txt_hilo) {
		this.txt_hilo = txt_hilo;
	}

	public List<Comentario> getComentarios() {
		return comentarios;
	}

	public void setComentarios(List<Comentario> comentarios) {
		this.comentarios = comentarios;
	}

}
