package borrame.cosas;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.Objects;

public class Deposito implements Comparable<Deposito> {
private int ancho;
private int alto;
private int profundo;
private String nombre;

public int getAncho() {
	return ancho;
}
public void setAncho(int ancho) {
	this.ancho = ancho;
}
public int getAlto() {
	return alto;
}
public void setAlto(int alto) {
	this.alto = alto;
}
public int getProfundo() {
	return profundo;
}
public void setProfundo(int profundo) {
	this.profundo = profundo;
}
public String getNombre() {
	return nombre;
}
public void setNombre(String nombre) {
	this.nombre = nombre;
}
@Override
public int hashCode() {
	return Objects.hash(alto, ancho, nombre, profundo);
}
@Override
public boolean equals(Object obj) {
	if (this == obj)
		return true;
	if (!(obj instanceof Deposito))
		return false;
	Deposito other = (Deposito) obj;
	return alto*ancho*profundo == other.alto*other.ancho*other.profundo;
}
@Override
public int compareTo(Deposito o) {
	int v1 = ancho*alto*profundo;
	int v2 = o.ancho*o.alto*o.profundo;
	if(v1>v2)return 1;
	else if(v1== v2) return 0;
	else return -1;
}


void leer() throws IOException {
	BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
	
	br.readLine();
}



}
