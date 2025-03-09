using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class ArraysEx2
  {
    static void Main(string[] args)
    {
      int[] numbers = { 1, 9, 3, 8, 5, 7 };

      for(int i = 0; i< numbers.Length; i++)
      {
        Console.WriteLine(numbers[i] * 2);
      }
    }
  }
}
