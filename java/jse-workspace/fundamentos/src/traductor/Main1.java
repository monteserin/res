package traductor;

public class Main1 {

	public static void main(String[] args) {
		// El inyector de dependencias se encargarķa de pasarle el TraductorMaster a la
		// interfaz
		ITranslate implementacionEscogida = new TraductorMaster();
		Conector conector = new Conector(implementacionEscogida);
		conector.traducir("Hola");
	}
}
