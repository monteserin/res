using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class OperadoresEx4DobleTriple
  {
    static void Main(string[] args)
    {
      Console.WriteLine("Introduzca un número: ");
      string n = Console.ReadLine();
      int nConvertido = 0;
      int.TryParse(n, out nConvertido);

      int doble = nConvertido * 2;
      int triple = nConvertido * 3;
      Console.WriteLine("Doble: " + doble);
      Console.WriteLine("Triple: " + triple);
    }
  }
}
