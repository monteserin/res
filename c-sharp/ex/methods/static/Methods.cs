using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Methods
  {
    static void Main(string[] args)
    {
      ClassWithStaticMethod.Greet();
    }
  }

  class ClassWithStaticMethod
  {
    public static void Greet()
    {
      Console.WriteLine("Good morning!");
    }
  }
}
