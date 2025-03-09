package javafx.layouts;

import javafx.application.Application;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.HBox;
import javafx.stage.Stage;

public class WithHBox2 extends Application {
	@Override
	public void start(Stage primaryStage) {
		try {
			
			
			
			
			Button btn = new Button("Púlsame");
			Button btn2 = new Button("Púlsame2");
			
			HBox root = new HBox(btn, btn2);

			
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
