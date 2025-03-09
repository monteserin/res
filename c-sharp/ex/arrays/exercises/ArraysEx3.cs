using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class ArraysEx3
  {
    static void Main(string[] args)
    {
      string [] months = { "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" };
      Console.WriteLine("Write a month number");

      
      int n_month = 0;
      int.TryParse(Console.ReadLine(), out n_month);
      string month = months[n_month - 1];
      Console.WriteLine(month);
    }
  }
}
