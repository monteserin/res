using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{

   class OuterClass
  {
    private string extProp = "external class property";
    public class InnerClass
    {
      private string intProp = "inner class property";
      public void ShowProp()
      {
        Console.WriteLine(intProp);
      }
    }
    public void ShowProp()
    {
      Console.WriteLine(extProp);
    }
    
  }

  class MainClass
  {
    static void Main(String[] args)
    {
      OuterClass outerClass = new OuterClass();
      outerClass.ShowProp();

      OuterClass.InnerClass innerClass =  new OuterClass.InnerClass();
      innerClass.ShowProp();
    }
  }
}


