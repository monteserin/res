package futbol.entity;

import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="estadio")
public class Estadio {
	@Id
	private int equipo_cod;
	private int estadio_cod;
	private String nombre;
	private int construccion;
	private int aforo;
	private String foto_estadio;
	public int getEquipo_cod() {
		return equipo_cod;
	}
	public void setEquipo_cod(int equipo_cod) {
		this.equipo_cod = equipo_cod;
	}
	public int getEstadio_cod() {
		return estadio_cod;
	}
	public void setEstadio_cod(int estadio_cod) {
		this.estadio_cod = estadio_cod;
	}
	public String getNombre() {
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	public int getConstruccion() {
		return construccion;
	}
	public void setConstruccion(int construccion) {
		this.construccion = construccion;
	}
	public int getAforo() {
		return aforo;
	}
	public void setAforo(int aforo) {
		this.aforo = aforo;
	}
	public String getFoto_estadio() {
		return foto_estadio;
	}
	public void setFoto_estadio(String foto_estadio) {
		this.foto_estadio = foto_estadio;
	}
	
	
}
