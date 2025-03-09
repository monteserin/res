package application.pojo;

import java.util.ArrayList;

public class Rutine {
	private String title;
	private ArrayList<Exercise> exercises;

	public String getTitle() {
		return title;
	}

	public void setTitle(String title) {
		this.title = title;
	}

	public ArrayList<Exercise> getExercises() {
		return exercises;
	}

	public void setExercises(ArrayList<Exercise> exercises) {
		this.exercises = exercises;
	}

}
