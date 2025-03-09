using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class ArraysFample
  {
    static void Main(string[] args)
    {
      string[] dias1 = { "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" };
      string[] dias2 = new string[7];
      dias2[0] = "Monday";
      dias2[1] = "Tuesday";
      dias2[2] = "Wednesday";
      dias2[3] = "Thursday";
      dias2[4] = "Friday";
      dias2[5] = "Saturday";
      dias2[6] = "Sunday";

      Console.WriteLine(dias1[5]);
      Console.WriteLine(dias2[3]);
    }
  }
}
