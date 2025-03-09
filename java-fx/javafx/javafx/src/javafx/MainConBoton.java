package javafx;

import java.io.File;

import javafx.application.Application;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.StackPane;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;
import javafx.stage.Stage;

public class MainConBoton extends Application {
	@Override
	public void start(Stage primaryStage) {
		try {
			
			StackPane root = new StackPane();
			
			
			
			Button btn = new Button("Púlsame");
			btn.setOnAction(event -> {
				String musicFile = "sound/HakunaMatataItMeansNoWorries.mp3";     // For example

				Media sound = new Media(new File(musicFile).toURI().toString());
				MediaPlayer mediaPlayer = new MediaPlayer(sound);
				mediaPlayer.play();
			});
			root.getChildren().add(btn);
			
			
			Scene scene = new Scene(root, 400, 400);
			primaryStage.setScene(scene);
			primaryStage.show();
		} catch (Exception e) {
			e.printStackTrace();
		}
	}

	public static void main(String[] args) {
		launch(args);
	}
}
