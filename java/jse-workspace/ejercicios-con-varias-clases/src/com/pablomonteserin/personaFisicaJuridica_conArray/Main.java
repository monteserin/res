package com.pablomonteserin.personaFisicaJuridica_conArray;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;

public class Main {

	public static void main(String[] args) throws ParseException {
		String[] stringPersonas = { "personaFisica#Juan#123456-7#01-01-1960",
				"personaFisica#Eva#234567-8#02-02-1970",
				"personaJuridica#Teresa#ABCDEF#calle a, numero1",
				"personaJuridica2#Roberto#GHIJKL#calle b, numero2" };
		
		Persona[] personas = new Persona[stringPersonas.length];
		SimpleDateFormat formatter = new SimpleDateFormat("dd-MM-yyyy");
		for (int i = 0; i < stringPersonas.length; i++) {
			String[] personaSplitada = stringPersonas[i].split("#");
			if (personaSplitada[0].substring(0, 12).equals("personaJurid") == true) {
				PersonaJuridica personaJuridica = new PersonaJuridica(
						personaSplitada[1], personaSplitada[2],
						personaSplitada[3]);
				personas[i] = personaJuridica;
			} else {

				PersonaFisica personaFisica = new PersonaFisica(
						personaSplitada[1], personaSplitada[2],
						formatter.parse(personaSplitada[3]));
				personas[i] = personaFisica;

			}
		}
		for (int i = 0; i < personas.length; i++) {
			System.out.println(personas[i].getNombre());

		}

	}

}
