using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class OperadoresEx6Grados
  {
    static void Main(string[] args)
    {
      Console.WriteLine("Introduzca los grados centígrados: ");
      string gradosCentígrados = Console.ReadLine();
      int gradosCentigradosConvertidos = 0;
      int.TryParse(gradosCentígrados, out gradosCentigradosConvertidos);

      float gradosFahrenheit = gradosCentigradosConvertidos * 9 / 5 + 32;
      Console.WriteLine("Grados Fahrenheit: " + gradosFahrenheit);
    }
  }
}
