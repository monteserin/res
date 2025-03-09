using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class ExceptionWithCatchs
  {
    static void Main(string[] args)
    {
      int i = 2;
      int j = 0;
      Console.WriteLine("before");
      try
      {
        Console.WriteLine("in the try");
        Console.WriteLine(i / j);
      }
      catch (ArithmeticException e)
      {
        Console.WriteLine("in catch1");
        e.ToString();
      }
      catch (Exception e)
      {
        Console.WriteLine("in catch2");
        e.ToString();
      }
      
      Console.WriteLine("after");
    }
  }
}
