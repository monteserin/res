using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class BucleWhile3RecogidaNumeros
  {
    static void Main(string[] args) {
      string continuamosRecogiendoValores = "si";
      int contadorNumeros = 0;
      while(continuamosRecogiendoValores == "si") { 
      Console.WriteLine("Introduce un número, por favor:");
        string n = Console.ReadLine();
        if(n == "-1")
        {
          continuamosRecogiendoValores = "no";
        }
        else
        {
          contadorNumeros++;
        }
      }
      Console.WriteLine("Cantidad de números introducidos: " + contadorNumeros);
    }
  }
}
