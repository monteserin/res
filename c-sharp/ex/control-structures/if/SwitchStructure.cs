using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class SwtichStructure
  {
    static void Main(string[] args)
    {
      char option = 'b';
      switch (option)
      {
        case 'a':
          Console.WriteLine("Solution1");
          break;
        case 'b':
          Console.WriteLine("Solution2");
          break;
        default:
          Console.WriteLine("default");
          break;
      }
    }
  }
}
