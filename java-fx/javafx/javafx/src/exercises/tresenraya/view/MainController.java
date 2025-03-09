package exercises.tresenraya.view;

import javafx.event.Event;
import javafx.fxml.FXML;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.Priority;
import javafx.scene.layout.VBox;
import javafx.scene.text.Text;
import javafx.stage.Modality;
import javafx.stage.Stage;

public class MainController {
	int turno;
	static String[] board = new String[9];

	@FXML
	Button btn;

	@FXML
	public void btnPulsado(Event e) {
		Button b = (Button) e.getTarget();

		int id = Integer.parseInt(b.getId());
		System.out.println(id);

		String color = turno % 2 == 0 ? "salmon" : "paleGreen";
		b.setStyle("-fx-background-color:" + color);

		board[id] = color;

		
		turno++;
		
		if(evaluateWin(board)) {
		    Stage stage = (Stage)((Button)e.getSource()).getScene().getWindow();

			final Stage dialog = new Stage();
            dialog.initModality(Modality.APPLICATION_MODAL);
            dialog.initOwner(stage);
            VBox dialogVbox = new VBox();
            
            Text txt = new Text("Ha ganado el jugador " + color);
            dialogVbox.setAlignment(Pos.CENTER);
            VBox.setVgrow(txt, Priority.ALWAYS);
            dialogVbox.getChildren().add(txt);
            Scene dialogScene = new Scene(dialogVbox, 300, 200);
            dialog.setScene(dialogScene);
            dialog.show();  
		}
		/*for(String cell : board) {
			System.out.println(cell);
		}*/

	}

	public static boolean evaluateWin(String[] board) {
		for(String cell : board) {
			System.out.println(cell);
		}
		if (board[0] == board[1] && board[0] == board[2] && board[0] != null) {
			return true;
		} else if (board[3] == board[4] && board[3] == board[5] && board[3] != null) {
			return true;
		} else if (board[6] == board[7] && board[6] == board[8] && board[6] != null) {
			return true;
		} else if (board[0] == board[3] && board[0] == board[6] && board[0] != null) {
			return true;
		} else if (board[1] == board[4] && board[1] == board[7] && board[1] != null) {
			return true;
		} else if (board[2] == board[5] && board[2] == board[8] && board[2] != null) {
			return true;
		} else if (board[0] == board[4] && board[0] == board[8] && board[0] != null) {
			return true;
		} else if (board[2] == board[4] && board[2] == board[6] && board[2] != null) {
			return true;
		} else
			return false;
	}

}

// 		int id = Integer.parseInt(b.getId());

// onAction