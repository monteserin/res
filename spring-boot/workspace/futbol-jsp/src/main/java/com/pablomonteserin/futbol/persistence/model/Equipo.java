package com.pablomonteserin.futbol.persistence.model;

import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="equipo")
public class Equipo {
	@Id
	private int equipo_cod;
	private String nombre;
	private int fundacion;
	private String presidente;
	private double presupuesto;
	private String equipacion;
	private String foto_equipo;
	private String foto_escudo;
	private String pagina_web;
	public int getEquipo_cod() {
		return equipo_cod;
	}
	public void setEquipo_cod(int equipo_cod) {
		this.equipo_cod = equipo_cod;
	}
	public String getNombre() {
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	public int getFundacion() {
		return fundacion;
	}
	public void setFundacion(int fundacion) {
		this.fundacion = fundacion;
	}
	public double getPresupuesto() {
		return presupuesto;
	}
	public void setPresupuesto(double presupuesto) {
		this.presupuesto = presupuesto;
	}
	public String getEquipacion() {
		return equipacion;
	}
	public void setEquipacion(String equipacion) {
		this.equipacion = equipacion;
	}
	public String getFoto_equipo() {
		return foto_equipo;
	}
	public void setFoto_equipo(String foto_equipo) {
		this.foto_equipo = foto_equipo;
	}
	public String getFoto_escudo() {
		return foto_escudo;
	}
	public void setFoto_escudo(String foto_escudo) {
		this.foto_escudo = foto_escudo;
	}
	public String getPagina_web() {
		return pagina_web;
	}
	public void setPagina_web(String pagina_web) {
		this.pagina_web = pagina_web;
	}
	public String getPresidente() {
		return presidente;
	}
	public void setPresidente(String presidente) {
		this.presidente = presidente;
	}
	
	
	
}
