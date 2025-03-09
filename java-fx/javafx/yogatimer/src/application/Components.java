package application;

import java.io.File;
import java.util.ArrayList;

import application.pojo.Exercise;
import application.pojo.Rutine;
import javafx.animation.KeyFrame;
import javafx.animation.Timeline;
import javafx.beans.property.DoubleProperty;
import javafx.beans.property.IntegerProperty;
import javafx.beans.property.SimpleDoubleProperty;
import javafx.beans.property.SimpleIntegerProperty;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.HBox;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;
import javafx.scene.paint.Color;
import javafx.scene.text.Text;
import javafx.util.Duration;

public class Components {
	private Timeline timeline;
	private Duration time = Duration.ZERO, splitTime = Duration.ZERO;
	private DoubleProperty timeSeconds = new SimpleDoubleProperty();
	private IntegerProperty splitTimeSeconds = new SimpleIntegerProperty();
	private ArrayList<Rutine> rutines;
	private Rutine selectedRutine;
	private Text rutineText;
	private Text exerciseText;
	private ImageView exerciseImgv;
	private int exerciseTime;
	private HBox root;
	private int exerciseIndex;
	
	
	private MediaPlayer mediaPlayer;
	
	

	public Components() {
		rutines = YogaHelper.getArrayListFromJSON(
				"C:\\data\\tutos\\res\\java-fx\\javafx\\yogatimer\\src\\application\\rutines.json");
		exerciseText = new Text();
		rutineText = new Text("Seleccione una rutina");
		
		String musicFile = "sound/dong.aiff"; 
		Media sound = new Media(new File(musicFile).toURI().toString());
		
		 mediaPlayer = new MediaPlayer(sound);
	}

	public void setLayout(HBox root) {
		this.root = root;
	}

	Label getTimerLabel() {
		Label splitTimerLabel = new Label();
		splitTimerLabel.textProperty().bind(splitTimeSeconds.asString());
		splitTimerLabel.setTextFill(Color.BLUE);
		splitTimerLabel.setStyle("-fx-font-size: 4em;");
		return splitTimerLabel;
	}

	ComboBox<String> getCombo() {
		ArrayList<String> rutinesTitles = Utils.getTitlesFromRutines(rutines);
		ObservableList<String> options2 = FXCollections.observableArrayList(rutinesTitles);
		ComboBox<String> op = new ComboBox<String>(options2);
		op.setMinWidth(100);
		op.getSelectionModel().selectedItemProperty().addListener((options, oldValue, newValue) -> {
			System.out.println(newValue);
			stopResetTimer();

			for (Rutine r : rutines) {
				if (r.getTitle().equals(newValue)) {
					selectedRutine = r;
					rutineText.setText(r.getTitle());
					setExercise(0);
					break;
				}
			}
		});
		return op;
	}

	void setExercise(int index) {
		Exercise ex = selectedRutine.getExercises().get(index);
		exerciseText.setText(ex.getTitle());
		exerciseTime = ex.getTime();
		exerciseImgv.setImage(new Image("/application/img/" + ex.getImg()));
	}

	Text getRutineText() {
		return rutineText;
	}

	Text getExerciseText() {
		exerciseText.setWrappingWidth(200);
		return exerciseText;
	}

	ImageView getImgv() {
		exerciseImgv = new ImageView();
		exerciseImgv.setFitHeight(100);
		exerciseImgv.setFitWidth(100);
		return exerciseImgv;
	}

	void stopResetTimer() {
		if (timeline != null) {
			splitTime = Duration.ZERO;
			splitTimeSeconds.set((int) splitTime.toSeconds());
		} else {
			timeline = new Timeline(new KeyFrame(Duration.millis(1000), new EventHandler<ActionEvent>() {
				@Override
				public void handle(ActionEvent t) {
					Duration duration = ((KeyFrame) t.getSource()).getTime();
					splitTime = splitTime.add(duration);
					int currentTime = (int) splitTime.toSeconds();
					int diffTime = exerciseTime - currentTime;
					if (diffTime == 6) {
						root.setStyle("-fx-background-color: red");

					} else if (diffTime == 5) {
						root.setStyle("-fx-background-color: blue");

					} else if (diffTime == 4) {
						root.setStyle("-fx-background-color: yellow");

					} else if (diffTime == 3) {
						mediaPlayer.play();
						root.setStyle("-fx-background-color: purple");

					} else if (diffTime == 2) {
						mediaPlayer.play();
						root.setStyle("-fx-background-color: green");

					} else if (diffTime == 1) {
						mediaPlayer.play();
						root.setStyle("-fx-background-color: green");

					} else if (diffTime == 0) {
						root.setStyle("-fx-background-color: green");
						splitTime = Duration.ZERO;

						exerciseIndex++;
						
						if(exerciseIndex >= selectedRutine.getExercises().size()) {
							exerciseIndex =0;
						}
							
						setExercise(exerciseIndex);
						

					} else {
						root.setStyle("-fx-background-color: transparent");
					}
					splitTimeSeconds.set(diffTime);
				}
			}));
			timeline.setCycleCount(Timeline.INDEFINITE);
			timeline.play();
		}
	}

}
