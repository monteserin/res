using System;
using System.Collections.Generic;
using System.Text;

namespace AnimalInterface
{
  class Cerdo : Animal
  {
    int kilosCarne;
    public Cerdo(string sonido) : base(sonido) { }

    public override void Comunicarse()
    {
      Console.WriteLine("Cuando el cerdo está gordo hace " + sonido);
    }
  }
}


