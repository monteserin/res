using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class BucleForEx6Potencia
  {
    static void Main(string[] args) {
      int miBase = 0;
      int miExponente = 0;
      Console.WriteLine("Introduzca la base: ");
      int.TryParse(Console.ReadLine(), out miBase);
      Console.WriteLine("Introduzca el exponente: ");
      int.TryParse(Console.ReadLine(), out miExponente);

      int resultado = miBase;
      for (int i = 1; i < miExponente; i++)
      {
        resultado *= miBase;
      }
      Console.WriteLine(resultado);
    }
  }
}
