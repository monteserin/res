using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Exercise1Cube
  {
    public void CalculateCube(int n)
    {
      int result = n * n * n;
      Console.WriteLine("Resultado: " + result);
    }
    static void Main(string[] args)
    {
      Exercise1Cube exercise1Cube;
      exercise1Cube = new Exercise1Cube();
      exercise1Cube.CalculateCube(3);
    }
  } 
}
