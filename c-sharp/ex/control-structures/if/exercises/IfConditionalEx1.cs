using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class IfConditionalEx1
  {
    static void Main(string[] args)
    {
      int nota = 7;
      if (nota > 5)
      {
        Console.WriteLine("Aprobado");
      }else if(nota == 5)
      {
        Console.WriteLine("Aprobado por los pelos");
      }
      else
      {
        Console.WriteLine("Suspenso");
      }
    }
  }
}
