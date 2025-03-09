package javafx.layouts;

import javafx.application.Application;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.HBox;
import javafx.scene.layout.Priority;
import javafx.stage.Stage;

public class WithHBoxMaxWidthSize extends Application {
	@Override
	public void start(Stage primaryStage) {
		try {
			
			HBox root = new HBox();
			

			
			Button btn1 = new Button("Púlsame1");
			Button btn2 = new Button("Púlsame2");
			
			HBox.setHgrow(btn1, Priority.ALWAYS);
			HBox.setHgrow(btn2, Priority.ALWAYS);
			
			btn1.setMaxWidth(Double.MAX_VALUE);
			btn2.setMaxWidth(Double.MAX_VALUE);
			
			root.getChildren().add(btn1);
			root.getChildren().add(btn2);
			
		/*	
			
			Button btn3 = new Button("Púlsame1");
			Button btn4 = new Button("Púlsame2");
			
			HBox.setHgrow(btn3, Priority.NEVER);
			HBox.setHgrow(btn4, Priority.NEVER);
			
			btn3.setMaxWidth(Double.MAX_VALUE);
			btn4.setMaxWidth(Double.MAX_VALUE);
			
			root.getChildren().add(btn3);
			root.getChildren().add(btn4);
			
			
			*/

			
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
