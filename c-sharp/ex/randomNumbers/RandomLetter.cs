using System;
using System.Collections.Generic;
using System.Text;


namespace Exercises.randomNumbers
{
  class RandomLetter
  {
    static void Main()
    {
      Random r = new Random();
      String nombre = "Pablo";
      int randomNumber = r.Next(0, nombre.Length); 
      string letra = nombre.Substring(randomNumber, 1);
      Console.WriteLine(letra);
    }
  }
}
