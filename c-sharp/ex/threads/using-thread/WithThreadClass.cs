using System;
using System.Collections.Generic;
using System.Text;
using System.Threading;

namespace Exercises
{
  class WithThreadClass
  {
    static double variable1 = 100;

    static void Main(string[] args)
    {
      Thread t1 = new Thread(AsyncMethod);
      Thread t2 = new Thread(AsyncMethod);
      Thread t3 = new Thread(AsyncMethod);

      t1.Start();
      t2.Start();
      t3.Start();

    }

    static void AsyncMethod()
    {
      variable1 -= 10;
      System.Threading.Thread.Sleep(new TimeSpan(0, 0, 1));
      Console.WriteLine("Variable1:" + variable1);
    }


  }
}
