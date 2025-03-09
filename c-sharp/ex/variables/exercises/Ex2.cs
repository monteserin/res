using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Ex2
  {
    static void Main(string[] args)
    {
      int a = 5;
      int b = 7;
      int c = a;
      a = b;
      b = c;


      Console.WriteLine(a); //Debería mostrar 7
      Console.WriteLine(b); //Debería mostrar 5
    }
  }
}
