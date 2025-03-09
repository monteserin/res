using System;
using System.Collections.Generic;
using System.Text;

namespace OverloadOverride
{
  class OverloadOverride
  {
    static void Main(string[] args)
    {
      Son h = new Son();
      Son.Override("Be Welcome ", "Pablo");
      Son.Overload(3);

    }
  }
  class Father
  {
    public static void Override(string welcomeTxt, string nombre)
    {
      Console.WriteLine(welcomeTxt + nombre);
    }
    public static void Overload(string byeByeTxt, string nombre)
    {
      Console.WriteLine(byeByeTxt + nombre);
    }
  }
  class Son : Father
  {
    //Los parámetros de entrada no deben cambiar
    //El tipo devuelto no debe cambiar.
    public static void Override(string welcomeTxt, string nombre)
    {
      Console.WriteLine(welcomeTxt + "......" + nombre);
    }

    //Los parámetros de entrada deben cambiar.
    //El tipo de dato devuelto puede cambiar.
    public static int Overload(int byeByeCode)
    {
      Console.WriteLine(byeByeCode);
      return 4;
    }
  }
}


