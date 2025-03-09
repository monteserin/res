package borrame.cosas.paquete2;

import java.util.ArrayList;
import java.util.Iterator;

public class OtroMain {
public static void main(String[] args) {
	
	ArrayList<Persona> personas = new ArrayList<>();
	
	Persona p1 = new Persona("Juan",12);
	Persona p2 = new Persona("Laura",23);
	Persona p3 = new Persona("Pp",172);
	
	personas.add(p1);
	personas.add(p2);
	personas.add(p3);
	
	
	Iterator <Persona>it = personas.iterator();
	while(it.hasNext()) {
		Persona p =  it.next();
		System.out.println(p.getNombre());
	}
	
	for (Persona persona: personas) {
	    System.out.println(persona.getNombre());
	}
	
	personas.forEach(persona -> System.out.println(persona.getNombre()));

}
}
