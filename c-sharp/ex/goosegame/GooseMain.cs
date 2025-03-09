using System;
using System.Collections.Generic;
using System.Text;
using System.Collections;


namespace Exercises.goosegame
{
  class GooseGame
  {
    static void Main(String[] args)
    {
      Console.WriteLine("Cuntas personas van a jugar?");
      int j = 0;

      int.TryParse(Console.ReadLine(), out j);
      List<Player> players = new List<Player>();

      for (int i = 0; i < j; i++)
      {
        int numeroJugador = i + 1;
        Console.WriteLine("¿Como se llama el jugador " + numeroJugador + "?");
        string nombre = Console.ReadLine();
        Player player = new Player();
        player.nombre = nombre;
        player.turnosRestantes = 0;
        player.casilla = 0;
        players.Add(player);
      }
      int[] gooses = { 5, 9, 14, 18, 23, 27, 32, 36, 41, 45, 50, 54, 59 };
      bool someBodyHasWin = false;
      while (!someBodyHasWin)
      {
        Console.WriteLine(1);
        for (int i = 0; i < j; i++)
        {
          Console.WriteLine(2);
          Player hm = players[i];
          if (hm.turnosRestantes == 0)
          {
            int position = hm.casilla;
            Console.WriteLine(hm.nombre + " se mueve a la casilla " + position);
            Random rnd = new Random();

            int dado = rnd.Next(1, 7); 
            int nuevaPosicion = position + dado;

            Dictionary<int, int> ht = new Dictionary<int, int>();
            ht.Add(5, 9);
            ht.Add(9, 14);
            ht.Add(14, 18);
            ht.Add(18, 23);
            ht.Add(23, 27);
            ht.Add(27, 32);
            ht.Add(32, 36);
            ht.Add(36, 41);
            ht.Add(41, 45);
            ht.Add(45, 50);
            ht.Add(50, 54);
            ht.Add(54, 59);
            ht.Add(59, 63);

            if (nuevaPosicion == 19)
            {
              Console.WriteLine(hm.nombre + " has falled int the hostal");
              hm.turnosRestantes = 2;
            }
            if (nuevaPosicion == 3)
            {
              hm.turnosRestantes = 1;
            }
            if (ht.ContainsKey(nuevaPosicion))
            {
              Console.WriteLine(hm.nombre + " has falled in the goose.");

              nuevaPosicion = ht[nuevaPosicion];
              i--;
              someBodyHasWin = true;
            }

            hm.casilla = nuevaPosicion;

            if (nuevaPosicion >= 63)
            {
              Console.WriteLine("Ha ganado " + hm.nombre);
              someBodyHasWin = true;
              break;
            }
            if (i == j - 1)
            {
              i = -1;
            }
          }
          else
          {
            hm.turnosRestantes = hm.turnosRestantes - 1;
          }
        }
      }
    }
  }
}

