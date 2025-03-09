using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Exercise5Circunference
  {
    void CalculateArea(double radio)
    {
      double result = Math.PI * radio * radio;;
      Console.WriteLine("Area: " + result);
    }

    void CalculatePerimeter(double radio)
    {
      double result = 2 * Math.PI * radio;
      Console.WriteLine("Perímetro: " + result);
    }

    static void Main(string[] args)
    {
      Exercise5Circunference exercise5Circunference;
      exercise5Circunference = new Exercise5Circunference();
      exercise5Circunference.CalculateArea(3);
      exercise5Circunference.CalculatePerimeter(3);
    }
  } 
}
