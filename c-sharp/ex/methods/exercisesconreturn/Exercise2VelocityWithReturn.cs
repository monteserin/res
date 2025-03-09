using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Exercise2VelocityWithReturn
  {
    public int CalculateVelocity(int n)
    {
      int result = n * 1000;
      return result;
    }
    static void Main(string[] args)
    {
      Exercise2VelocityWithReturn exercise2VelocityWithReturn;
      exercise2VelocityWithReturn = new Exercise2VelocityWithReturn();
      int value = exercise2VelocityWithReturn.CalculateVelocity(15);
      Console.WriteLine("Result: " + value);

    }
  } 
}
