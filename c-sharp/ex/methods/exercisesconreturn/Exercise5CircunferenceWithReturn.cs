using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Exercise5CircunferenceWithReturn
  {
    double CalculateArea(double radio)
    {
      double result = Math.PI * radio * radio;
      return result;
    }

    double CalculatePerimeter(double radio)
    {
      double result = 2 * Math.PI * radio;
      return result;
    }

    static void Main(string[] args)
    {
      Exercise5CircunferenceWithReturn exercise5CircunferenceWithReturn;
      exercise5CircunferenceWithReturn = new Exercise5CircunferenceWithReturn();
      double value1 = exercise5CircunferenceWithReturn.CalculateArea(3);
      double value2 = exercise5CircunferenceWithReturn.CalculatePerimeter(3);
      Console.WriteLine("Area: " + value1);
      Console.WriteLine("Perímetro: " + value2);
    }
  } 
}
