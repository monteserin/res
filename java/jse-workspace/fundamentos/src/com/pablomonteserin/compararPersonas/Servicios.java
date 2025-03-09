package com.pablomonteserin.compararPersonas;

import java.util.Collection;
import java.util.Iterator;
import java.util.Map;

public class Servicios {

	public static Persona getPersonaMayor(Map personas) throws SinDatosException{
		Persona personaDevuelta;

		if(personas.isEmpty())throw new SinDatosException();
		Collection<Persona> personasCollection = personas.values();
		Iterator it = personasCollection.iterator();
		Persona persona1 = (Persona) it.next();
		Persona persona2 = (Persona) it.next();
		if(persona1.getFechaNacimiento().getTime() < persona2.getFechaNacimiento().getTime())personaDevuelta = persona1;
		else personaDevuelta = persona2;
		
		return personaDevuelta;
	}
	
	public static Persona getPrimerNombre(Map personas) throws SinDatosException{
		if(personas.isEmpty())throw new SinDatosException();
		Collection<Persona> personasCollection = personas.values();
		Iterator it = personasCollection.iterator();
		Persona personaDevuelta;
		Persona persona1 = (Persona) it.next();
		Persona persona2 = (Persona) it.next();
		if(persona1.getNombre().compareTo(persona2.getNombre())<0)personaDevuelta = persona1;
		else personaDevuelta = persona2;
		return personaDevuelta;
	}
}
