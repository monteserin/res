using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  interface Instrument
  {
    void play();//automáticamente público
  }

  class Clase : Instrument
  {

  static void Main(String[] args)
  {
    Clase c = new Clase();
    c.play();
  }
  public void play()
  {
    Console.WriteLine("Jugar al baloncesto");
  }
}
}


