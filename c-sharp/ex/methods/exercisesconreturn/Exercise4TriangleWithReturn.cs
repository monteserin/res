using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Exercise4TriangleWithReturn
  {
    int CalculateArea(int baseValue, int height)
    {
      int result = baseValue * height / 2;
      return result;
    }

    static void Main(string[] args)
    {
      Exercise4TriangleWithReturn exercise4TriangleWithReturn;
      exercise4TriangleWithReturn = new Exercise4TriangleWithReturn();
      int value = exercise4TriangleWithReturn.CalculateArea(2, 3);
      Console.WriteLine("Area: " + value);

    }
  } 
}
