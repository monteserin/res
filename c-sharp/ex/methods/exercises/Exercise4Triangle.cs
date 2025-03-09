using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Exercise4Triangle
  {
    void CalculateArea(int baseValue, int height)
    {
      int result = baseValue * height / 2;
      Console.WriteLine("Result: " + result);
    }

    static void Main(string[] args)
    {
      Exercise4Triangle exercise4Triangle;
      exercise4Triangle = new Exercise4Triangle();
      exercise4Triangle.CalculateArea(2, 3);
    }
  } 
}
