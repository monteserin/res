using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises.delegates
{

  class MainClass
  {
    static void Main()
    {
      MyDelegate myDelegate = new MyDelegate();
      //Cada vez que ejecute la función PrintValue, se detonará el evento myEvent
      myDelegate.myEvent += PrintValue;
      myDelegate.IterateValues();
    }

    private static void PrintValue(string value)
    {
      Console.WriteLine(value);
    }
  }
}
