package javafx.media;

import javafx.application.Application;
import javafx.scene.Scene;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;

public class MyImage extends Application {
	@Override
	public void start(Stage primaryStage) {
		try {

			StackPane root = new StackPane();

			Image img = new Image("/images/perro.jpg");
			ImageView imgView = new ImageView(img);

			root.getChildren().add(imgView);

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
