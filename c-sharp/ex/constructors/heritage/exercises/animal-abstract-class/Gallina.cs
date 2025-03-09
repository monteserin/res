using System;
using System.Collections.Generic;
using System.Text;

namespace AbstractClass
{
  class Gallina : Animal 
  {
    int numeroHuevos;
    public Gallina(string sonido) : base(sonido)
    {
    }

    public override void Comunicarse()
    {
      Console.WriteLine("Cuando amanece, la gallina hace " + sonido);
    }
  }
}


