using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class OperadoresEx3IVA
  {
    static void Main(string[] args)
    {
      Console.WriteLine("Introduzca el pecio sin IVA: ");
      string precioSinIva = Console.ReadLine();
      float precioSinIvaFloat = 0;
      float.TryParse(precioSinIva, out precioSinIvaFloat);
      float precioConIva = precioSinIvaFloat * 1.21f;
      Console.WriteLine("Esa cantidad son " + precioConIva + " dolares");
    }
  }
}
