using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class TicTacToe
  {
    static void Main(string[] args)
    {
      String[] tablero = { " ", " ", " ", " ", " ", " ", " ", " ", " " };

      TicTacToe tresEnRaya = new TicTacToe();
      tresEnRaya.ShowTablero(tablero);


      int jugador = 0;
      String signo = "";
      while (true)
      {
        if (jugador % 2 == 0) signo = "X";
        else signo = "O";

        tresEnRaya.JuegaPlayer(signo, tablero);
        tresEnRaya.ShowTablero(tablero);
        bool ganar = tresEnRaya.EvaluateWin(tablero);
        if (ganar)
        {
          Console.WriteLine("Has ganado, player " + signo);
          break;
        }
        jugador++;
      }

    }

    public bool EvaluateWin(String[] tablero)
    {
      if (tablero[0] == tablero[1] && tablero[0] == tablero[2] && tablero[0] != " ")
      {
        return true;
      }
      else if (tablero[3] == tablero[4] && tablero[3] == tablero[5] && tablero[3] != " ")
      {
        return true;
      }
      else if (tablero[6] == tablero[7] && tablero[6] == tablero[8] && tablero[6] != " ")
      {
        return true;
      }
      else if (tablero[0] == tablero[3] && tablero[0] == tablero[6] && tablero[0] != " ")
      {
        return true;
      }
      else if (tablero[1] == tablero[4] && tablero[1] == tablero[7] && tablero[1] != " ")
      {
        return true;
      }
      else if (tablero[2] == tablero[5] && tablero[2] == tablero[8] && tablero[2] != " ")
      {
        return true;
      }
      else if (tablero[0] == tablero[4] && tablero[0] == tablero[8] && tablero[1] != " ")
      {
        return true;
      }
      else if (tablero[2] == tablero[4] && tablero[2] == tablero[6] && tablero[2] != " ")
      {
        return true;
      }
      else return false;
    }
    public void JuegaPlayer(String signo, String[] tablero)
    {
      Console.WriteLine("A dÃ³nde quieres mover?");
      int posicion = 0;
      int.TryParse(Console.ReadLine(), out posicion);
      tablero[posicion] = signo;
    }

    public void ShowTablero(String[] tablero)
    {
      Console.WriteLine(tablero[0] + " | " + tablero[1] + " | " + tablero[2]);
      Console.WriteLine(tablero[3] + " | " + tablero[4] + " | " + tablero[5]);
      Console.WriteLine(tablero[6] + " | " + tablero[7] + " | " + tablero[8]);
    }
  }
  }
