using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class ArraysEx1
  {
    static void Main(string[] args)
    {
      string[] nombres = { "Paco", "Laura", "Juan", "Raquel", "Jorge" };

      for(int i = 0; i<nombres.Length; i++)
      {
        Console.WriteLine(nombres[i]);
      }
    }
  }
}
