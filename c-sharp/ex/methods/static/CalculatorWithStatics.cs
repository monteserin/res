using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class CalculatorWithStatics
  {
    static int Sum(int n1, int n2)
    {
      int result = n1 + n2;
      return result;
    }

    static int Subtraction(int n1, int n2)
    {
      int result = n1 - n2;
      return result;
    }

    static int Multiply(int n1, int n2)
    {
      int result = n1 * n2;
      return result;
    }

    static int Divide(int n1, int n2)
    {
      int result = n1 / n2;
      return result;
    }

    static void Main(string[] args)
    {
      int n1 = 0;
      int n2 = 0;
      Console.WriteLine("Introduzca el primer número");
      int.TryParse(Console.ReadLine(), out n1);
      Console.WriteLine("Introduzca el segundo número");
      int.TryParse(Console.ReadLine(), out n2);
      Console.WriteLine("Introduce la operación a realizar");
      string op = Console.ReadLine();
      int result = 0;
      if (op == "+")
      {
        result = Sum(n1, n2);
      }
      else if (op == "-")
      {
        result = Subtraction( n1 , n2);
      }
      else if (op == "*")
      {
        result = Multiply( n1, n2);
      }
      else if (op == "/")
      {
        result = Divide( n1 , n2);
      }
      Console.WriteLine("Resultado: " + result);
    }
  } 
}
