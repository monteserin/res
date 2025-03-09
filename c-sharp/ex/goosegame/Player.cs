using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises.goosegame
{
  class Player
  {
    public Player (string nombre)
    {
      this.nombre = nombre;
    }
    public string nombre { get; set; }
    public int casilla { get; set; }
    public int turnosRestantes { get; set; }

  }
}
