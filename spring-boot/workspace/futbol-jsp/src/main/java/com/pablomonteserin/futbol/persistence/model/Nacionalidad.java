package com.pablomonteserin.futbol.persistence.model;

import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity 
@Table(name="nacionalidad")
public class Nacionalidad {
@Id
	private int nac_cod;
private String nacionalidad;
public int getNac_cod() {
	return nac_cod;
}
public void setNac_cod(int nac_cod) {
	this.nac_cod = nac_cod;
}
public String getNacionalidad() {
	return nacionalidad;
}
public void setNacionalidad(String nacionalidad) {
	this.nacionalidad = nacionalidad;
}

}
