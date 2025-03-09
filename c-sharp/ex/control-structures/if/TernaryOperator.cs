using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class TernaryOperator
  {
    static void Main(string[] args)
    {
      int a = 5;
      int b = 3;

      if (a > b) { Console.WriteLine("a is bigger than bb"); }
      else { Console.WriteLine("b is bigger than a"); }

      string result = (a > b) ? "a is bigger than b" : "b is bigger than a";
      Console.WriteLine(result);
    }
  }
}
