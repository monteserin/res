package relaciones2.entities;

import java.io.Serializable;
import java.util.Objects;

public class CuentaSucursalPK implements Serializable {
	private int nCuenta;
	private Sucursal sucursal;
	
	
	@Override
	public int hashCode() {
		return Objects.hash(nCuenta, sucursal);
	}
	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		CuentaSucursalPK other = (CuentaSucursalPK) obj;
		return nCuenta == other.nCuenta && sucursal.getnSucursal() == other.sucursal.getnSucursal();
	}

	
}