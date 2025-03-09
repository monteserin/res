using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class OperadoresEx5Rectangulo
  {
    static void Main(string[] args)
    {
      Console.WriteLine("Introduzca el ancho: ");
      string ancho = Console.ReadLine();

      Console.WriteLine("Introduzca el alto: ");
      string alto = Console.ReadLine();

      int anchoConvertido = 0;
      int altoConvertido = 0;

      int.TryParse(ancho, out anchoConvertido);
      int.TryParse(alto, out altoConvertido);

      int perimetro = 2 * anchoConvertido + 2 * altoConvertido;
      int area = anchoConvertido * altoConvertido;

      Console.WriteLine("Perímetro: " + perimetro);
      Console.WriteLine("Area: " + area);
    }
  }
}
