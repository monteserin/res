using System;
using System.Collections.Generic;
using System.Text;

namespace AbstractClass
{
  class MainClass
  {
    static void Main(string[] args)
    {
      Gallina g = new Gallina("kikiriki");
      Vaca v = new Vaca("muuuu");
      Cerdo c = new Cerdo("oink oink");
      g.Comunicarse();
      v.Comunicarse();
      c.Comunicarse();
    }
  }
}


