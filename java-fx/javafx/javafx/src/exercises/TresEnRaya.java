package exercises;

import javafx.application.Application;
import javafx.event.Event;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.Priority;
import javafx.stage.Stage;

public class TresEnRaya extends Application {
	static int turno = 0;
	static char [] board = new char[9];
	@Override
	public void start(Stage primaryStage) {
		generateBoard(primaryStage);

	}

	public static void main(String[] args) {
		launch(args);
	}
	
	public static void generateBoard(Stage primaryStage) {
		GridPane root = new GridPane();

		int index = 0;
		for( int i=0; i<3; i++) {
			for(int j = 0; j<3; j++ ) {
				Button btn = new Button("Púlsame");
				btn.getProperties().put("index", i);
				
				GridPane.setVgrow(btn, Priority.ALWAYS);
				GridPane.setHgrow(btn, Priority.ALWAYS);
				
				btn.setMaxWidth(Double.MAX_VALUE);		
				btn.setMaxHeight(Double.MAX_VALUE);
				
	
				btn.setOnAction(e -> btnPulsado(e));
								
				root.add(btn, i, j);

			}
		}
		
		Scene scene = new Scene(root, 400, 400);
		primaryStage.setScene(scene);
		primaryStage.show();
	}
	
	public static void btnPulsado(Event e) {
		Button b = (Button) e.getTarget();
		String color = turno%2==0?"salmon":"paleGreen";
		b.setStyle("-fx-background-color:"+ color);
		int id = (int)b.getProperties().get("index");
		board[id]=turno%2==0?'a':'b';
		turno++;
		boolean somebodyWon = evaluateWin(board);
		System.out.println(somebodyWon);
	}
	
	public static boolean evaluateWin(char [] board) {
		if(board[0] == board[1] && board[0]==board[2] && board[0]!='\u0000') {
			return true;
		}else if(board[3] == board[4] && board[3]==board[5] && board[3]!='\u0000') {
			return true;
		}else if(board[6] == board[7] && board[6]==board[8] && board[6]!='\u0000') {
			return true;
		}else if(board[0] == board[3] && board[0]==board[6] && board[0]!='\u0000') {
			return true;
		}else if(board[1] == board[4] && board[1]==board[7] && board[1]!='\u0000') {
			return true;
		}else if(board[2] == board[5] && board[2]==board[8] && board[2]!='\u0000') {
			return true;
		}else if(board[0] == board[4] && board[0]==board[8] && board[1]!='\u0000') {
			return true;
		}else if(board[2] == board[4] && board[2]==board[6] && board[2]!='\u0000') {
			return true;
		}
		else return false;
	}
}

//				btn.getProperties().put("index", i);

