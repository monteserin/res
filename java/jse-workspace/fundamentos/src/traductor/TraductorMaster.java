package traductor;

public class TraductorMaster implements ITranslate{
	@Override
	public void translate(String txt) {
		System.out.println(txt + " traducido");
	}
}
