package  com.pablomonteserin.herenciaconstructores;

class Padre{
		private String nombre = "Pepe";
		
		public void saludar(){
			System.out.println(this.nombre);
		}
	}
public class Herencia extends Padre{

	public static void main(String[] args) {
		Herencia a_herencia = new Herencia();
		a_herencia.saludar();
	}
}


