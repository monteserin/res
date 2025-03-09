using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class OperadoresEx7PedidoCaja
  {
    static void Main(string[] args)
    {
      Console.WriteLine("Introduce tu nombre: ");
      string nombre = Console.ReadLine();

      Console.WriteLine("Introduce el material de la caja: ");
      string material = Console.ReadLine();

      Console.WriteLine("Introduce las dimensiones de la caja: ");
      string dimensiones = Console.ReadLine();

      Console.WriteLine("Introduce tus comentarios: ");
      string comentarios = Console.ReadLine();


      Console.WriteLine(nombre + " ha pedido una caja de " + material + " con unas dimensiones " + dimensiones+". " + comentarios);
    }
  }
}
