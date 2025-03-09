package javafx.layouts;

import javafx.application.Application;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.HBox;
import javafx.stage.Stage;

public class WithHBox extends Application {
	@Override
	public void start(Stage primaryStage) {
		try {
			
			HBox root = new HBox();
			
			
			
			Button btn = new Button("Púlsame");
			Button btn2 = new Button("Púlsame2");
			root.getChildren().add(btn);
			root.getChildren().add(btn2);

			
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
