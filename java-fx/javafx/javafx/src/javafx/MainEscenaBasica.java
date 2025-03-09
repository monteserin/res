package javafx;

import javafx.application.Application;
import javafx.scene.Scene;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;

public class MainEscenaBasica extends Application {
	@Override
	public void start(Stage primaryStage) {
		try {
			// Especificamos el layout que definir� la distribuci�n de los componentes en
			// escena
			StackPane root = new StackPane();
			// Definimos la escena (la vista o ventana con la que el usuario va a
			// interactuar)
			// Dicha escena recibe como par�metro la distrubuci�n de sus componentes y sus
			// medidas
			Scene scene = new Scene(root, 400, 400);
			// Para que una escena sea visible, debe ser a�adida al escenario
			primaryStage.setScene(scene);
			// Hacemos visible el escenario
			primaryStage.show();
		} catch (Exception e) {
			e.printStackTrace();
		}
	}

	public static void main(String[] args) {
		launch(args);
	}
}