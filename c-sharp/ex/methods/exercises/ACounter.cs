using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class ACounter
  {
    static void Main(string[] args)
    {
      string name = "Regular Show is the best";
      int aCounter = 0;
      for(int i = 0; i < name.Length; i++)
      {
        if(name.Substring(i,1) == "a")
        {
          aCounter++;
        }
      }
      Console.WriteLine("Amount of A: " + aCounter);
    }
  }
}
