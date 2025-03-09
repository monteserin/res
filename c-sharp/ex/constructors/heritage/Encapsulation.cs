using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Encapsulation
  {
    static void Main(string[] args)
    {
      Warehouse warehouse = new Warehouse();
      warehouse.numBoxes = 12;
      Console.WriteLine(warehouse.numBoxes);
    }
  }
  class Warehouse
  {
    private int _numBoxes;

    public int numBoxes
    {
      get { return _numBoxes; }
      set
      {
        if (numBoxes > 10)
        {
          Console.WriteLine("Deliveries of more than 10 units are not allowed");
        }
        else
        {
          _numBoxes = value;
        }
      }
    }
  }
}
