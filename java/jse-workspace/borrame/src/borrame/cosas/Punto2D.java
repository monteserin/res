package borrame.cosas;

import java.util.Objects;

class Punto2D{
	private int x;
	private int y;
	private String nombre;
		
	public Punto2D(int x, int y, String nombre) {
		super();
		this.x = x;
		this.y = y;
		this.nombre=nombre;
	}

	@Override
	public int hashCode() {
		return Objects.hash(nombre, x, y);
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (!(obj instanceof Punto2D))
			return false;
		Punto2D other = (Punto2D) obj;
		return x == other.x && y == other.y;
	}

	
	
	
}
