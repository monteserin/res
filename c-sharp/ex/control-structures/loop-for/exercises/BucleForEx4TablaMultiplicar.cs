using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class BucleForEx4TablaMultiplicar
  {
    static void Main(string[] args) {
     
      for(int i = 0; i <= 9; i++)
      {
        for(int j = 0; j<=9; j++)
        {
          Console.WriteLine(i + " x " + j + " = " + (i*j));
        }
      }
    }
  }
}
