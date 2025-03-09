using System;
using System.Collections.Generic;
using System.Text;

namespace AnimalInheritance
{
  class MainClass
  {
    static void Main(string[] args)
    {

      Vaca v = new Vaca("muuuuu");
      Gallina g = new Gallina("kikiriki");
      Cerdo c = new Cerdo("oink oink");
      v.Comunicarse();
      g.Comunicarse();
      c.Comunicarse();
    }
  }
}


