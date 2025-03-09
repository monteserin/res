using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class FuncionesEx3RectanguloConReturn
  {
    int calcularPerimetro(int ancho, int alto)
    {
      int resultado = ancho * 2 + alto * 2;
      return resultado;
    }

    int calcularArea(int ancho, int alto)
    {
      int resultado = ancho * alto;
      return resultado;
    }

    static void Main(string[] args)
    {
      FuncionesEx3RectanguloConReturn funcionesEx3RectanguloConReturn;
      funcionesEx3RectanguloConReturn = new FuncionesEx3RectanguloConReturn();
      int valor1 = funcionesEx3RectanguloConReturn.calcularPerimetro(2,3);
      int valor2 = funcionesEx3RectanguloConReturn.calcularArea(2, 3);
      Console.WriteLine("Perímetro: " + valor1);
      Console.WriteLine("Area: " + valor1);


    }
  } 
}
