using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Inheritance
  {
    static void Main(string[] args)
    {
      Son s = new Son();
      s.Greet();
    }
  }
  class Father
  {
    public void Greet()
    {
      Console.WriteLine("Hola");
    }
  }
  class Son : Father{}
}


