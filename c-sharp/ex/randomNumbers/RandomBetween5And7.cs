using System;
using System.Collections.Generic;
using System.Text;


namespace Exercises.randomNumbers
{
  class RandomBetween5And7
  {
    static void Main()
    {
      Random r = new Random();
      int randomNumber = r.Next(5, 8); 
      Console.WriteLine(randomNumber);
    }
  }
}
