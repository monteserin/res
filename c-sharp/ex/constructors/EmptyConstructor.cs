using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class EmptyConstructor
  {
    static void Main(string[] args)
    {
      MyClass myClass = new MyClass();
    }
  }
  class MyClass
  {
    public MyClass()
    {
      Console.WriteLine("Hello!!!");
    }
  }
}


