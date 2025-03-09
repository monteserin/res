using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class IfConditionalEx2
  {
    static void Main(string[] args)
    {
      int i = 7;
    if( i >= 0)
      {
        Console.WriteLine("La variable i es positiva");
      }
      else
      {
        Console.WriteLine("La variable i es negativa");
      }


      if (i % 2 == 0)
      {
        Console.WriteLine("La variable i es par");
      }
      else
      {
        Console.WriteLine("La variable i es impar");
      }


      if (i % 5 == 0)
      {
        Console.WriteLine("La variable i es múltiplo de 5");
      }
      else
      {
        Console.WriteLine("La variable i no es múltiplo de 5");
      }

      if (i % 5 == 0)
      {
        Console.WriteLine("La variable i es múltiplo de 10");
      }
      else
      {
        Console.WriteLine("La variable i no es múltiplo de 10");
      }

      if (i < 100)
      {
        Console.WriteLine("La variable i es menor que 100");
      }
      else
      {
        Console.WriteLine("La variable i es mayor que 100");
      }
    }
  }
}
