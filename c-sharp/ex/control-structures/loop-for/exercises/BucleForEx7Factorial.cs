using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class BucleForEx7Factorial
  {
    static void Main(string[] args) {
      int n = 0;
      Console.WriteLine("Introduzca un número: ");
      int.TryParse(Console.ReadLine(), out n);
      int resultado = 1;
      for (int i = 1; i <= n; i++)
      { 
        resultado *= i;
      }
      Console.WriteLine(resultado);
    }
  }
}
