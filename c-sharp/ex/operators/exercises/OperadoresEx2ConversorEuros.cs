using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class OperadoresEx2ConversorEuros
  {
    static void Main(string[] args)
    {
      Console.WriteLine("Introduzca una cantidad de euros: ");
      string euros = Console.ReadLine();
      int eurosConvertidos = 0;
      int.TryParse(euros, out eurosConvertidos);
      int dolares = eurosConvertidos * 2;
      Console.WriteLine("Esa cantidad son " + dolares + " dolares");
    }
  }
}
