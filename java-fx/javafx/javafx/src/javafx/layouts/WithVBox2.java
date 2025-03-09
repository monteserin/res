package javafx.layouts;

import javafx.application.Application;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.Priority;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;

public class WithVBox2 extends Application {
	@Override
	public void start(Stage primaryStage) {
		try {
			
			VBox root = new VBox();
			
			
			
			Button btn1 = new Button("Púlsame");
			Button btn2 = new Button("Púlsame2");
			
			VBox.setVgrow(btn1, Priority.ALWAYS);
			VBox.setVgrow(btn2, Priority.ALWAYS);
			
			btn1.setMaxHeight(Double.MAX_VALUE);
			btn2.setMaxHeight(Double.MAX_VALUE);
			
			
			btn1.setMaxWidth(Double.MAX_VALUE);
			btn2.setMaxWidth(Double.MAX_VALUE);
			
			root.getChildren().add(btn1);
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
