using System;
using System.Collections.Generic;
using System.Text;

namespace EjercicioExcepcion
{
  class MainClass
  {
    static void Main(string[] args)
    {
      Servicios servicios = new Servicios();
      double precioConIva = 0.0;
      try
      {
        precioConIva = servicios.getPrecioConIva(100d);

      }catch( PrecioDemasiadoAltoException e)
      {
        Console.WriteLine(e.ToString());
      }
      Console.WriteLine(precioConIva);
    }
}
}
