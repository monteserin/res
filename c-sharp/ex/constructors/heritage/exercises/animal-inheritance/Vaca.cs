using System;
using System.Collections.Generic;
using System.Text;

namespace AnimalInheritance
{
  class Vaca : Animal
  {
    int litrosLeche;

    public Vaca(string sonido) : base(sonido) {}

    public void Comunicarse()
    {
      Console.WriteLine("Cuando la vaca tiene leche hace " + sonido + "- " + litrosLeche);
    }

  }
}


