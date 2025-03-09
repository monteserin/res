using System;
using System.Collections.Generic;
using System.Text;

namespace StaticVariable
{
  class StaticVariable
  {
    static int staticVariable = 0;
    int notStaticVariable = 0;

    static void Main(string[] args)
    {
      //Incrementamos la variable estática
      StaticVariable.staticVariable++;
      StaticVariable.staticVariable++;

      //Incrementamos la variable no estática
      StaticVariable variableStatic_1 = new StaticVariable();
      StaticVariable variableStatic_2 = new StaticVariable();

      variableStatic_1.notStaticVariable++;
      variableStatic_2.notStaticVariable++;

      //Mostramos resultados

      Console.WriteLine("variableStatic: " + StaticVariable.staticVariable);
      Console.WriteLine("variableNoEstatica1: " + variableStatic_1.notStaticVariable);
      Console.WriteLine("variableNoEstatica2: " + variableStatic_2.notStaticVariable);
    }
  }
}
