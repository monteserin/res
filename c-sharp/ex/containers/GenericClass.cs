using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class GenericClass
  {
    static void Main(string[] args)
    {
      Calculator<double> c = new Calculator<double>();
      double r = c.Sum(2.0 , 2.0);
      Console.WriteLine(r);
    }
  }

  class Calculator<T> { 

    public T Sum<T>(T n1, T n2)
    {
      dynamic a = n1;
      dynamic b = n2;
      return a + b;
    }
  }
}
