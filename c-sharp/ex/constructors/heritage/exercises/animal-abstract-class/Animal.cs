using System;
using System.Collections.Generic;
using System.Text;

namespace AbstractClass
{
  abstract class Animal
  {
    int peso;
    protected string sonido;
    public Animal(string sonido)
    {
      this.sonido = sonido;
    }
    public abstract void Comunicarse();

  }
}


