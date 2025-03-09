using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class WithStrings
  {
    static void Main(string[] args)
    {
      string name = "Rodolfo";
      Console.WriteLine(name.Substring(0, 3));
      Console.WriteLine(name.IndexOf('d'));
      Console.WriteLine(name.ToUpper());
      Console.WriteLine(name.ToLower());
      Console.WriteLine(name.Length);
    }
  }
}
