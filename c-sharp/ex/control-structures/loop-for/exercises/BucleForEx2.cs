using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class BucleForEx2
  {
    static void Main(string[] args) {
      for (int i = 0; i < 100; i++)
      {
        if (i % 2 == 0)
        {
          Console.WriteLine(i);
        }
      }
    }
  }
}
