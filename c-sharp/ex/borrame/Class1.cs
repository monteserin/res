using System;
using System.Collections.Generic;
using System.Text;
using System.Threading;


namespace Exercises.borrame
{
  class Class1
  {
    static double variable1 = 100;


    static void Main(string[] args)
      {
     /*   FalseThread ft1 = new FalseThread();
        FalseThread ft2 = new FalseThread();
        FalseThread ft3 = new FalseThread();
       */

      Thread t1 = new Thread(AsyncMethod);
      Thread t2 = new Thread(AsyncMethod);
      Thread t3 = new Thread(AsyncMethod);

      t1.Start();
      Console.WriteLine("-------------------------");

      t2.Start();
      t3.Start();

      Console.WriteLine("-------------------------");
    }

    static void AsyncMethod()
    {
      variable1 -= 10;
      System.Threading.Thread.Sleep(new TimeSpan(0, 0, 0));
      Console.WriteLine("Variable1:" + variable1);
    }

  }
}
