using System;
using System.Collections.Generic;
using System.Text;

namespace AbstractClass
{
  class Cerdo : Animal
  {
    int kilosCarne;
    public Cerdo(string sonido) : base(sonido)
    {
    }

    public override void Comunicarse()
    {
      Console.WriteLine("Cuando el cerdo está contento, hace" + sonido);
    }
  }
}


