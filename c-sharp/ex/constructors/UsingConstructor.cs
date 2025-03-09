using System;
using System.Collections.Generic;
using System.Text;

namespace UsingConstructor
{
  class UsingConstructor
  {
    static void Main(string[] args)
    {
      new MyClass("Juan");
    }
  }
  class MyClass
  {
    string name;
    public MyClass(string name)
    {
      this.name = name;
    }
  }
}


