package traductor;

public class Main2 {
	public static void main(String[] args) {
		// El inyector de dependencias se encargar�a de pasarle el TraductorMaster a la
		// interfaz
		ITranslate implementacionEscogida = new TraductorMaster();
		Conector conector = new Conector(implementacionEscogida);
		conector.traducir("Hola");
	}
}