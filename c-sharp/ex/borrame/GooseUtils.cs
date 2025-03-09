using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises.borrame
{
  class GooseUtils
  {


    public static int tirarDado()
    {
      Random r = new Random();
      return r.Next(1, 7);
    }


    public static int haCaidoEnUnaCasillaGuay(Player cp)
    {
      string nombrePlayer = cp.nombre;
      int casilla = cp.casilla;
      Dictionary<int, int> ocas = new Dictionary<int, int>();
      ocas.Add(5, 9);
      ocas.Add(9, 14);
      ocas.Add(14, 18);
      ocas.Add(18, 23);
      ocas.Add(23, 27);
      ocas.Add(27, 32);
      ocas.Add(32, 36);
      ocas.Add(36, 41);
      ocas.Add(41, 45);
      ocas.Add(45, 50);
      ocas.Add(50, 54);
      ocas.Add(54, 59);

      Dictionary<int, int> puentes = new Dictionary<int, int>();
      puentes.Add(6, 12);
      puentes.Add(12, 6);

      Dictionary<int, int> dados = new Dictionary<int, int>();
      dados.Add(26, 53);
      dados.Add(53, 26);

      if (ocas.ContainsKey(casilla))
      {
        Console.WriteLine(nombrePlayer + " - " + casilla + " - De oca a oca y tiro porque me toca");
        return ocas[casilla];
      }
      else if (puentes.ContainsKey(casilla))
      {
        Console.WriteLine(nombrePlayer + " - " + casilla + " - De puente a puente y tiro porque me lleva la corriente");
        return puentes[casilla];
      }
      else if (dados.ContainsKey(casilla))
      {
        Console.WriteLine(nombrePlayer + " - " + casilla + " - De dado a dado y tiro porque me ha tocado");
        return dados[casilla];
      }

      return -1;
    }

    public static int perderTurnos(Player p)
    {
      string nombrePlayer = p.nombre;
      int casilla = p.casilla;
      if (casilla == 19)
      {
        Console.WriteLine(nombrePlayer + " - " + casilla + " - El jugador ha caído en la pensión");
        return 2;
      }
      else if (casilla == 3)
      {
        Console.WriteLine(nombrePlayer + " - " + casilla + " - El jugador ha caído en el pozo");
        return 1;
      }
      else if (casilla == 52)
      {
        Console.WriteLine(nombrePlayer + " - " + casilla + " - El jugador ha caído en la carcel");
        return 3;
      }

      return -1;
    }
  }
}
