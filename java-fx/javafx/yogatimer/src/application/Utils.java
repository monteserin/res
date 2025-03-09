package application;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.util.ArrayList;

import application.pojo.Rutine;

public class Utils {

	public static ArrayList<String> getTitlesFromRutines(ArrayList<Rutine> rutines){
		ArrayList<String> rutinesTitles = new ArrayList<String>();
		
		for(Rutine s : rutines) {
			rutinesTitles.add(s.getTitle());
		}
		return rutinesTitles;
	}
	
	static String readFile(String fileName) throws IOException {
		BufferedReader br = new BufferedReader(new FileReader(fileName));
		try {
			StringBuilder sb = new StringBuilder();
			String line = br.readLine();

			while (line != null) {
				sb.append(line);
				sb.append("\n");
				line = br.readLine();
			}
			return sb.toString();
		} finally {
			br.close();
		}
	}
}
