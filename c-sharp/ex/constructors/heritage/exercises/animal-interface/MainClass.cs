using System;
using System.Collections.Generic;
using System.Text;

namespace AnimalInterface
{
  class MainClass
  {
    static void Main(string[] args)
    {
      Gallina g = new Gallina("kikikiki");
      Cerdo c = new Cerdo("oink oink");
      Vaca v = new Vaca("muuuu");

      g.Comunicarse();
      c.Comunicarse();
      v.Comunicarse();
    }
  }
}


