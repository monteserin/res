using System;
using System.Collections.Generic;
using System.Text;

namespace EjercicioExcepcion
{
  class Servicios
  {
    public double getPrecioConIva(double precio)
    {
      double precioDevuelto = Math.Round(precio * 1.16f,2);
      if(precioDevuelto > 100)
      {
        throw new PrecioDemasiadoAltoException();  
      }
      return precioDevuelto;
    }
  }
}
