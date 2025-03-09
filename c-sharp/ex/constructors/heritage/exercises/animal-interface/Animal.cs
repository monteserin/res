using System;
using System.Collections.Generic;
using System.Text;

namespace AnimalInterface
{
  abstract class Animal : Granjero
  {
    public string sonido;

    public Animal(string sonido)
    {
      this.sonido = sonido;
    }

    public abstract void Comunicarse();
  }
}


