using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises2
{

  public class PruebaMain 
  {
     static void Main(string[] args)
    {
      int x = 1;
      Console.WriteLine(++x * 4 + 1);
    }

    public  void saltar(int a)
    {
      throw new NotImplementedException();
    }
  }
  public abstract class Rqr
  {
    public abstract void saltar();
    public abstract void saltar(string a);

  }
}
