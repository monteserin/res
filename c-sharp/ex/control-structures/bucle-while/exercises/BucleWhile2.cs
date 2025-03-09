using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class BucleWhile2
  {
    static void Main(string[] args) {
      string todoCorrecto = "si";
      while(todoCorrecto == "si") { 
      Console.WriteLine("Introduce tu nombre, por favor:");
      string nombre = Console.ReadLine();

      if(nombre.Trim() == "") {
        Console.WriteLine("Error. Debe introducir algún valor");
      }
      else
      {
        Console.WriteLine("¿Son estos datos correctos?");
        string respuesta = Console.ReadLine();
        if(respuesta == "si")
        {
          Console.WriteLine("Puede seguir con el examen");
          break;
        }
      }
      }
    }
  }
}
