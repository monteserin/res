using System;
using System.Collections.Generic;
using System.Text;

namespace ConstructorsAndHeritage
{
  class ConstructorsAndInheritage
  {
    static void Main(string[] args)
    {
      Son s = new Son();
     
    }
  }
  class Father
  {
    public Father()
    {
      Console.WriteLine("Father is executed");
    }
  }
  class Son : Father
  {
    public Son()
    {
      Console.WriteLine("Son is executed");
    }
  }
}


