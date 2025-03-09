using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class FalseThread
  {
    static double variable1 = 100;
    public void Start()
    {
      variable1 -= 10;
      System.Threading.Thread.Sleep(new TimeSpan(0, 0, 1));
      Console.WriteLine("Variable1:" + variable1);
    }

  }
}
