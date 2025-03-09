package application;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.util.ArrayList;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import application.pojo.Exercise;
import application.pojo.Rutine;

public class YogaHelper {

	public static ArrayList<Rutine> getArrayListFromJSON(String jsonPath) {
		String jsonString;
		ArrayList<Rutine> rutines = new ArrayList<Rutine>();
		try {
			jsonString = Utils.readFile(jsonPath);
			JSONArray arr = new JSONArray(jsonString);
			for (int i = 0; i < arr.length(); i++) {
				JSONObject rutine = arr.getJSONObject(i);
				String title = rutine.getString("title");
				
				JSONArray exercises = rutine.getJSONArray("exercises");
				ArrayList<Exercise>exercisesList = new ArrayList<Exercise>();
				for (int j = 0; j < exercises.length(); j++) {
					Exercise e = new Exercise();
					JSONObject k = exercises.getJSONObject(j);
					e.setTitle(k.getString("title"));
					e.setTime(k.getInt("time"));
					e.setImg(k.getString("img"));
					exercisesList.add(e);
					
				}
				Rutine r = new Rutine();
				r.setTitle(title);
				r.setExercises(exercisesList);

				rutines.add(r);

			}
		} catch ( JSONException | IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} // assign your JSON String here

		return rutines;
	}

	
}