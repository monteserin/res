using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class WithoutThreads
  {
    static void Main(string[] args)
    {
      FalseThread t1 = new FalseThread();
      FalseThread t2 = new FalseThread();
      FalseThread t3 = new FalseThread();

      t1.Start();
      t2.Start();
      t3.Start();
    }
  }
}
