using System;
using System.Collections.Generic;
using System.Text;

namespace ConstructorWithParameter
{
  class ConstructorWithParameter
  {
    static void Main(string[] args)
    {
      new MyClass("Juan");
    }
  }
  class MyClass
  {
    public MyClass(string name)
    {
      Console.WriteLine("Hello " + name);
    }
  }
}


