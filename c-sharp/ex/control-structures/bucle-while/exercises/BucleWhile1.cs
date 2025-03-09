using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class BucleWhile1
  {
    static void Main(string[] args) {
      string quieroJugar = "si";
      string nSecreto = "4";
      while (quieroJugar == "si")
      {

        for (int i = 0; i < 5; i++)
        {
          Console.WriteLine("Introduce un número");
          string n = Console.ReadLine();
          if (n == nSecreto)
          {
            Console.WriteLine("Acertaste el número secreto");
            break;
          }
          else
          {
            Console.WriteLine("Te equivocaste");
          }
        }
        Console.WriteLine("¿Quieres seguir jugando?");
        quieroJugar = Console.ReadLine();
      }
    }
  }
}
