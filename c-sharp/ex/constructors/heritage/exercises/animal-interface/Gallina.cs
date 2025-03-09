using System;
using System.Collections.Generic;
using System.Text;

namespace AnimalInterface
{
  class Gallina : Animal
  {
    int numeroHuevos;
    public Gallina(string sonido) : base(sonido) { }

    public override void Comunicarse()
    {
      Console.WriteLine("Cuando la gallina pone huevos hace " + sonido);
    }
  }
}


