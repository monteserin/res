using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class WithoutReturnWithParameter
  {
    public void Greet(string name)
    {
      Console.WriteLine("Good afternoon " + name + "!");
    }
    static void Main(string[] args)
    {
      WithoutReturnWithParameter withoutReturnWithParameter;
      withoutReturnWithParameter = new WithoutReturnWithParameter();
      withoutReturnWithParameter.Greet("Pablo");
    }
  }
}
