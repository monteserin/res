using System;
using System.Collections.Generic;
using System.Text;

namespace AnimalInheritance
{
  class Cerdo : Animal
  {
    int kilosCarne;
    public Cerdo(string sonido) : base(sonido) { }

    public void Comunicarse()
    {
      Console.WriteLine("Cuando el cerdo pesa mucho, hace " + sonido);
    }
  }

}


