using System;
using System.Collections.Generic;
using System.Text;

namespace AnimalInheritance
{
  class Gallina : Animal
  {
    int numeroHuevos;
    public Gallina(string sonido) : base(sonido) { }

    public void Comunicarse()
    {
      Console.WriteLine("Cuando la gallina está contenta hace " + sonido);
    }

  }

}


