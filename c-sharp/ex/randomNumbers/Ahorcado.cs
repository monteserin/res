using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{

  class Ahorcado
  {
    static char[] palabraHastaAhora;
    static string palabraSecreta;
    static bool exito = false;

    static void Main()
    {
      string[] palabrasSecretas = { "gato", "perro", "vaca", "buey", "elefante", "mono", "caballo", "tigre", "pantera", "oso" };
      Random randomGenerator = new Random();
      palabraSecreta = palabrasSecretas[randomGenerator.Next(0, palabrasSecretas.Length)];
      palabraHastaAhora = new char[palabraSecreta.Length];
      Console.WriteLine("");
      pintarPalabra();


        do
        {
          Console.WriteLine("");
          Console.WriteLine("Introduzca una letra, por favor: ");
          char letra = Console.ReadLine().ToCharArray()[0];
          EvaluaLetra(letra);
          pintarPalabra();
        } while (exito != true);
        Console.WriteLine("");

        Console.WriteLine("Juego completado!");
      
 
    }

    public static void EvaluaLetra(char letraEvaluada)
    {
      for (int i = 0; i < palabraSecreta.Length; i++)
      {
        if (palabraSecreta[i] == letraEvaluada)
        {
          palabraHastaAhora[i] = letraEvaluada;
        }
      }

    }
    public static void pintarPalabra()
    {
      char letra;
      bool todasBien = true;
      char[] letters = palabraSecreta.ToCharArray();
      for (int i = 0; i < letters.Length; i++)
      {
        letra = palabraSecreta[i];
        if (letra == palabraHastaAhora[i])
        {
          Console.Write(letra);
        }
        else
        {
          todasBien = false;
          Console.Write("_ ");
        }
      }
      if (todasBien == true)
      {
        exito = true;
      }
    }
  }

  }

