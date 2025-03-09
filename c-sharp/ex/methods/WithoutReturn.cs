using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class WithoutReturn
  {
    public void Greet()
    {
      Console.WriteLine("Good Afternoon!");
    }
    static void Main(string[] args)
    {
      WithoutReturn withoutReturn;
      withoutReturn = new WithoutReturn();
      withoutReturn.Greet();
    }
  }
}
