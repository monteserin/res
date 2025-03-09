using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class BucleWhileTeoria1
  {
    static void Main(string[] args)
    {
      string iWantToPlay = "si";
      while (iWantToPlay == "si")
      {
        //...
	Console.WriteLine("do you want to keep playing?");
        iWantToPlay = Console.ReadLine();
      }

    }
  }
}
