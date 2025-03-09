using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Exercise1CubeWithReturn
  {
    public int CalculateCube(int n)
    {
      int result = n * n * n;
      return result;
    }
    static void Main(string[] args)
    {
      Exercise1CubeWithReturn exercise1CubeWithReturn;
      exercise1CubeWithReturn = new Exercise1CubeWithReturn();
      int value = exercise1CubeWithReturn.CalculateCube(3);
      Console.WriteLine("Resultado: " + value);

    }
  } 
}
