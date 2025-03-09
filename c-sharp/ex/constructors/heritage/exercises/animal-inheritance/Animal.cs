using System;
using System.Collections.Generic;
using System.Text;

namespace AnimalInheritance
{
  class Animal
  {
    public static string longerSound = "";
    protected string sonido;
    public Animal(string sonido)
    {
      Console.WriteLine("constructor del Animal");
      this.sonido = sonido;
    }

    public void Comunicarse()
    {
      Console.WriteLine("Sonido genérico");
    }
  }
}


