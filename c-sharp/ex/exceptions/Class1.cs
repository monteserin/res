using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Class1
  {
    static void Main(string[] args)
    {
      Class1 exceptionWithThrow = new Class1();
      try
      {
        exceptionWithThrow.ThrowExcepcion();
      }
      catch (Exception e)
      {
        Console.WriteLine("exception throwed and processed");
      }
      exceptionWithThrow.processException();
    }

    public void ThrowExcepcion() 
    {
	throw new Exception();
  }

  public void processException()
  {
    try
    {
      throw new Exception();
    }
    catch (Exception e)
    {
      Console.WriteLine("exception processed");
    }
  }
}
}
