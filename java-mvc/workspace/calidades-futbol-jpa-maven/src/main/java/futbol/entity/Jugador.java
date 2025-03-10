package futbol.entity;

import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="jugador")
public class Jugador {
	@Id
	private int jugador_cod;
	private int equipo_cod;
	private String nombre;
	private String apellidos;
	private int demarcacion;
	private int nacionalidad;
	private int numero_camiseta;
	private int calidad;
	private int velocidad;
	private int vision;
	private String nombre_jugador;
	private String descripcion;
	public int getEquipo_cod() {
		return equipo_cod;
	}
	public void setEquipo_cod(int equipo_cod) {
		this.equipo_cod = equipo_cod;
	}
	public int getJugador_cod() {
		return jugador_cod;
	}
	public void setJugador_cod(int jugador_cod) {
		this.jugador_cod = jugador_cod;
	}
	public String getNombre() {
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	public String getApellidos() {
		return apellidos;
	}
	public void setApellidos(String apellidos) {
		this.apellidos = apellidos;
	}
	public int getDemarcacion() {
		return demarcacion;
	}
	public void setDemarcacion(int demarcacion) {
		this.demarcacion = demarcacion;
	}
	public int getNacionalidad() {
		return nacionalidad;
	}
	public void setNacionalidad(int nacionalidad) {
		this.nacionalidad = nacionalidad;
	}
	public int getNumero_camiseta() {
		return numero_camiseta;
	}
	public void setNumero_camiseta(int numero_camiseta) {
		this.numero_camiseta = numero_camiseta;
	}
	public int getCalidad() {
		return calidad;
	}
	public void setCalidad(int calidad) {
		this.calidad = calidad;
	}
	public int getVelocidad() {
		return velocidad;
	}
	public void setVelocidad(int velocidad) {
		this.velocidad = velocidad;
	}
	public int getVision() {
		return vision;
	}
	public void setVision(int vision) {
		this.vision = vision;
	}
	public String getNombre_jugador() {
		return nombre_jugador;
	}
	public void setNombre_jugador(String nombre_jugador) {
		this.nombre_jugador = nombre_jugador;
	}
	public String getDescripcion() {
		return descripcion;
	}
	public void setDescripcion(String descripcion) {
		this.descripcion = descripcion;
	}
	
	
}
