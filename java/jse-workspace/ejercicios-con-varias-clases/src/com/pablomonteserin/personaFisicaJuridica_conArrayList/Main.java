package com.pablomonteserin.personaFisicaJuridica_conArrayList;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.Iterator;

public class Main {

	public static void main(String[] args) throws ParseException {
		String[] stringPersonas = { "personaFisica1#123456-7#01-01-1960",
				"personaFisica2#234567-8#02-02-1970",
				"personaJuridica1#ABCDEF#calle a, numero1",
				"personaJuridica2#GHIJKL#calle b, numero2" };
		
		ArrayList personas = new ArrayList();
		SimpleDateFormat formatter = new SimpleDateFormat("dd-MM-yyyy");
		for (int i = 0; i < stringPersonas.length; i++) {
			String[] personaSplitada = stringPersonas[i].split("#");
			if (personaSplitada[0].substring(0, 12).equals("personaJurid") == true) {
				PersonaJuridica personaJuridica = new PersonaJuridica(
						personaSplitada[0], personaSplitada[1],
						personaSplitada[2]);
				personas.add(personaJuridica);
			} else {

				PersonaFisica personaFisica = new PersonaFisica(
						personaSplitada[0], personaSplitada[1],
						formatter.parse(personaSplitada[2]));
				personas.add(personaFisica);

			}
		}
		Iterator<Persona> it = personas.iterator();
		while(it.hasNext()){
			Persona persona= it.next();
			System.out.println(persona.getNombre());
		}

	}

}
