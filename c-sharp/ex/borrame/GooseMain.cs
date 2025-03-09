using System;
using System.Collections.Generic;

namespace Exercises.borrame
{
  class GooseMain
  {


    static void Main2(string[] args)
    {

      Player p1 = new Player("Juan");
      Player p2 = new Player("Laura");

      List<Player> players = new List<Player>();
      players.Add(p1);
      players.Add(p2);

      bool somebodyHasWin = false;
      int turno = 0;
      while (!somebodyHasWin)
      {
        Player currentPlayer = players[turno];

        if(currentPlayer.turnosRestantes == 0)
        {
          int dado = GooseUtils.tirarDado();

          currentPlayer.casilla += +dado;
          Console.WriteLine(currentPlayer.nombre + " - " + currentPlayer.casilla);

          if (GooseUtils.haCaidoEnUnaCasillaGuay(currentPlayer) != -1)
          {
            continue;
          }else if(currentPlayer.casilla == 58)
          {
            Console.WriteLine(currentPlayer.nombre + " ha caído en la muerte y vuelve a la primera casilla");
            currentPlayer.casilla = 0;
          }
          else
          {
            int t = GooseUtils.perderTurnos(currentPlayer);
            if (t != -1)
            {
              currentPlayer.turnosRestantes = t;

            }
          }
        }
        else
        {
          Console.WriteLine("El player " + currentPlayer.nombre+" debe esperar su turno");
          currentPlayer.turnosRestantes--; ;
        }

        turno++;

        if (turno == players.Count)
        {
          turno = 0;
        }
        if (currentPlayer.casilla > 68)
        {
          Console.WriteLine("Ha ganado el player " + currentPlayer.nombre);
          somebodyHasWin = true;
        }
      }
    }


  }



}
