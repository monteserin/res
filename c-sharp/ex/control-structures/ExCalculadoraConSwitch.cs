using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class ExCalculadoraConSwitch
  {
    static void Main(string[] args)
    {
      int n1 = 0;
      int n2 = 0;
      Console.WriteLine("Introduzca el primer número");
      int.TryParse(Console.ReadLine(), out n1);
      Console.WriteLine("Introduzca el segundo número");
      int.TryParse(Console.ReadLine(), out n2);
      Console.WriteLine("Introduce la operación a realizar");
      string op = Console.ReadLine();
      int resultado = 0;
      switch (op)
      {
        case "+":
          resultado = n1 + n2;
          break;
        case "-":
          resultado = n1 - n2;
          break;
        case "*":
          resultado = n1 * n2;
          break;
        case "/":
          resultado = n1 / n2;
          break;


      }

      Console.WriteLine("El resultado es:" + resultado);

    }
  }
}
