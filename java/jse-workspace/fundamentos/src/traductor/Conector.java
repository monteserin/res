package traductor;

public class Conector {
	private ITranslate traductor;
	
	public Conector(ITranslate implementacionTraductor) {
		this.traductor = implementacionTraductor;
	}
	
	// En un caso real, con inyector de dependencias, el m�todo traducir no ser�a necesario,
	// podr�amos llamar directamente al m�todo translate a partir de la interfaz
	public void traducir(String texto){
		this.traductor.translate(texto);
	}
}
