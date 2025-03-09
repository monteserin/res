package application;


import javafx.application.Application;
import javafx.geometry.Insets;
import javafx.scene.Scene;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;

public class YogaTimerMain extends Application {

	@Override
	public void start(Stage primaryStage) {
		try {
			Components c = new Components();
			VBox vbox1 = new VBox( c.getCombo(), c.getTimerLabel());
			VBox vbox2 = new VBox( c.getExerciseText(), c.getImgv());
			HBox root = new HBox(vbox1, vbox2);
			c.setLayout(root);
			root.setStyle("-fx-background-color: transparent");

			root.setSpacing(10d);
			root.setPadding(new Insets(10, 10, 10, 10));

			printScene(primaryStage, root);
		} catch (Exception e) {
			e.printStackTrace();
		}
	}

	private void printScene(Stage primaryStage, HBox root) {
		Scene scene = new Scene(root, 300, 130);
		scene.getStylesheets().add(getClass().getResource("application.css").toExternalForm());
		primaryStage.setTitle("Yoga Timer");
		primaryStage.setScene(scene);
		primaryStage.show();
	}
	
	
	public static void main(String[] args) {
		launch(args);
	}
}
