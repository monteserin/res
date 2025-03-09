package com.pablomonteserin.compararPersonas;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Map;
import java.util.TreeMap;

public class Main {

	public static void main(String[] args) {
		Map personas = new TreeMap();
		SimpleDateFormat formatter = new SimpleDateFormat("dd-MM-yyyy");
		try {
			Persona persona1 = new Persona("483947583-P","Juan",  formatter.parse("10-11-2004"));
			Persona persona2 = new Persona("48572949-W", "Pepe", formatter.parse("10-11-2002"));
			personas.put(persona1.getDni(), persona1);
			personas.put(persona2.getDni(), persona2);
			Persona personaMayor = Servicios.getPersonaMayor(personas);
			Persona personaNombreAntes = Servicios.getPrimerNombre(personas);
			System.out.println("La persona mayor es:" + personaMayor.getNombre());
			System.out.println("La persona con primer nombre es:" + personaNombreAntes.getNombre());

		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (SinDatosException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

	
	}

}
