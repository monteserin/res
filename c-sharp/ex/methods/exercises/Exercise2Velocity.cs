using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Exercise2Velocity
  {
    public void CalculateVelocity(int n)
    {
      int result = n * 1000;
      Console.WriteLine("Resultado: " + result);
    }
    static void Main(string[] args)
    {
      Exercise2Velocity exercise2Velocity;
      exercise2Velocity = new Exercise2Velocity();
      exercise2Velocity.CalculateVelocity(15);
    }
  } 
}
