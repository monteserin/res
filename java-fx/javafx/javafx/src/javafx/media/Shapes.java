package javafx.media;

import javafx.application.Application;
import javafx.scene.Scene;
import javafx.scene.layout.HBox;
import javafx.scene.paint.Color;
import javafx.scene.shape.Arc;
import javafx.scene.shape.ArcType;
import javafx.scene.shape.Circle;
import javafx.scene.shape.Line;
import javafx.scene.shape.Polygon;
import javafx.scene.shape.Polyline;
import javafx.scene.shape.Rectangle;
import javafx.stage.Stage;

public class Shapes extends Application{
	public void start(Stage stage) {
		Circle circle = new Circle(40); 
	    circle.setFill(Color.RED);
	    circle.setStroke(Color.BLACK);
	    circle.setStrokeWidth(2.0);
	    
	    Rectangle rect = new Rectangle(0,0,120, 75);
	    rect.setFill(Color.RED);

	    // Create a line
	    Line line = new Line(0, 0, 150, 50);
	   
	    // Create a parallelogram
	    Polygon poligono = new Polygon();
	    poligono.getPoints().addAll(30.0, 0.0,
	                                     130.0, 0.0, 
	                                     120.00, 50.0, 
	                                     0.0, 50.0);
	    poligono.setStroke(Color.BLACK);

	    // Create a hexagon
	    Polyline polilinea = new Polyline(100.0, 0.0, 
	                                    120.0, 20.0, 
	                                    110.0, 140.0, 
	                                    100.0, 60.0, 
	                                    80.0, 40.0, 
	                                    80.0, 120.0);
	
	    
	    // centerX, centerY, radiusX , radiusY , startAngle, length 
	    Arc arc = new Arc(0, 0, 50, 100, 0, 90);
	    arc.setType(ArcType.CHORD);

	    // Add all shapes to an HBox
	    HBox root = new HBox(circle, rect, line, poligono, polilinea, arc);  

	    Scene scene = new Scene(root);
	    stage.setScene(scene);
	    stage.setTitle("2D Shapes");
	    stage.show();
	}
	
	public static void main(String[] args) {
		launch(args);
	}
}
