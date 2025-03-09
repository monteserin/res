package com.pablomonteserin.canciones;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;

public class Main {

	public static void main(String args[]){
		Cancion cancion1 = new Cancion("tit1", 20);
		Cancion cancion2 = new Cancion("tit2", 40);
		Cancion cancion3 = new Cancion("tit3",45);
		Cancion cancion4 = new Cancion("tit4", 45);
		Cancion cancion5 = new Cancion("tit5", 24);
		Cancion cancion6 = new Cancion("tit6", 28);
		Cancion cancion7 = new Cancion("tit7", 29);
		Cancion cancion8 = new Cancion("tit8", 34);
		Cancion cancion9 = new Cancion("tit9",32);
		Cancion cancion10 = new Cancion("tit10", 28);
		Cancion cancion11 = new Cancion("tit11", 3);
		Cancion cancion12 = new Cancion("tit12", 3);
		Cancion cancion13 = new Cancion("tit13", 3);
		Cancion cancion14 = new Cancion("tit14", 4);
		
		Musico musico1 = new Musico("name1", "gen1");
		Musico musico2 = new Musico("name2", "gen2");
		Musico musico3 = new Musico("name3", "gen3");
		Musico musico4 = new Musico("name4", "gen4");
		Musico musico5 = new Musico("name5", "gen5");
		Banda banda1 = new Banda("banda1", "rock");
		Banda banda2 = new Banda("banda2", "country");
		Banda banda3 = new Banda("banda3", "rock");
		Banda banda4 = new Banda("banda4", "country");
		Banda banda5 = new Banda("banda5", "rock");
		
		ArrayList<Cancion> canciones = new ArrayList<Cancion>();
		canciones.add(cancion1);
		canciones.add(cancion2);
		canciones.add(cancion3);
		canciones.add(cancion4);
		canciones.add(cancion5);
		canciones.add(cancion6);
		canciones.add(cancion7);
		canciones.add(cancion8);
		canciones.add(cancion9);
		canciones.add(cancion10);
		canciones.add(cancion11);

		SimpleDateFormat formatter = new SimpleDateFormat("dd-mm-yyyy");
		CD cd1 = null;
		CD cd2 = null;
		CD cd3 = null;
		CD cd4 = null;
		CD cd5 = null;
		try {
			cd1 = new CD("titCD1",formatter.parse("10-10-2010"));
			cd2 = new CD("titCD2", formatter.parse("04-04-2008"));
			cd3 = new CD("titCD3", formatter.parse("05-06-2003"));
			cd4 = new CD("titCD4", formatter.parse("02-07-2006"));
			cd5 = new CD("titCD5", formatter.parse("04-05-2005"));
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		
		ListaReproduccion list1 = new ListaReproduccion();
		ListaReproduccion list2 = new ListaReproduccion();
		list1.addCancion(cancion1);
		list1.addCancion(cancion2);
		list1.addCancion(cancion3);
		list1.addCancion(cancion4);
		list1.addCancion(cancion5);
		list1.addCancion(cancion6);
		list1.addCancion(cancion7);
		list2.addCancion(cancion1);
		list2.addCancion(cancion2);
		list2.addCancion(cancion3);
		list2.addCancion(cancion4);
		list2.addCancion(cancion5);
		list2.addCancion(cancion6);
		list2.addCancion(cancion7);
		cd1.addCancion(cancion2);
		cd1.addCancion(cancion4);
		cd1.addCancion(cancion6);
		cd3.addCancion(cancion8);
		cd3.addCancion(cancion10);
		cd3.addCancion(cancion12);
		cd3.addCancion(cancion14);
		cd2.addCancion(cancion1);
		cd2.addCancion(cancion3);
		cd4.addCancion(cancion5);
		cd4.addCancion(cancion7);
		cd5.addCancion(cancion9);
		cd5.addCancion(cancion11);
		cd2.addCancion(cancion13);

	
		banda1.addMusico(musico1);
		banda2.addMusico(musico2);
		banda3.addMusico(musico3);
		banda4.addMusico(musico4);
		banda5.addMusico(musico5);

		System.out.println(cancion2.getDuracion());
		System.out.println(cd1.getDuracion());
		//CD cd = new CD("titCD","10-10-20",	canciones);
	}
}
