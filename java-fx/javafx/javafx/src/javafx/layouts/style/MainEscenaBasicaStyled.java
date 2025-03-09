package javafx.layouts.style;

import javafx.application.Application;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;

public class MainEscenaBasicaStyled extends Application {
	@Override
	public void start(Stage primaryStage) {
		try {
			
			VBox root = new VBox();
			root.setStyle("-fx-background-color:pink;");

			Button btn = new Button("Púlsame");
			btn.setStyle("-fx-background-color:blue;");
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
