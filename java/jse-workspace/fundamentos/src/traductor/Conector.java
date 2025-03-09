package traductor;

public class Conector {
	private ITranslate traductor;
	
	public Conector(ITranslate implementacionTraductor) {
		this.traductor = implementacionTraductor;
	}
	
	// En un caso real, con inyector de dependencias, el método traducir no sería necesario,
	// podríamos llamar directamente al método translate a partir de la interfaz
	public void traducir(String texto){
		this.traductor.translate(texto);
	}
}
