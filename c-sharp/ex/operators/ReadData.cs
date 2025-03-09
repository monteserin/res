using System;
using System.Collections.Generic;
using System.Globalization;
using System.Text;

namespace Exercises
{
  class ReadData  
  {
    static void Main(string[] args)
    {
      Console.WriteLine("Write anything, please: ");
      string variable = Console.ReadLine();
      Console.WriteLine("Writed value: " + variable);

      Console.WriteLine("Write a number: ");
      string number = Console.ReadLine();
      int convertedNumber = 0;
      int.TryParse(number.Trim(), out convertedNumber);
      Console.WriteLine("Writed number: " + convertedNumber);

      Console.WriteLine("Push any key: ");
      int keyCode = Console.Read();
      Console.WriteLine("The keycode of this key is: " + keyCode);

    }
  }
}
