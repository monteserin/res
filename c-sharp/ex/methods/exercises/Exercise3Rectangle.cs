using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Exercise3Rectangle
  {
    void CalculatePerimeter(int width, int height)
    {
      int result = width * 2 + height * 2;
      Console.WriteLine("Perimeter: " + result);
    }

    void CalculateArea(int width, int height)
    {
      int result = width * height;
      Console.WriteLine("Area: " + result);
    }

    static void Main(string[] args)
    {
      Exercise3Rectangle exercise3Rectangle;
      exercise3Rectangle = new Exercise3Rectangle();
      exercise3Rectangle.CalculatePerimeter(2,3);
      exercise3Rectangle.CalculateArea(2, 3);
    }
  } 
}
