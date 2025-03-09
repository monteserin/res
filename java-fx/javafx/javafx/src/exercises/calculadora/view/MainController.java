package exercises.calculadora.view;

import javafx.fxml.FXML;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.layout.HBox;

public class MainController {
	@FXML
	HBox hbox;

	@FXML
	private TextField n1;

	@FXML
	private ComboBox op;

	@FXML
	private TextField n2;
	
	@FXML
	private Label output;

	@FXML
	public void calcular() {
		int n1Val = Integer.parseInt(n1.getText());
		int n2Val = Integer.parseInt(n2.getText());
		String opVal = (String) op.getValue();

		int r = 0;
		if (opVal.equals("+")) {
			r = n1Val + n2Val;
		} else if (opVal.equals("_")) {
			r = n1Val - n2Val;
		} else if (opVal.equals("*")) {
			r = n1Val * n2Val;
		} else if (opVal.equals("/")) {
			r = n1Val / n2Val;
		}
		output.setText(" El resultado es: "+r);
		
	}
}
