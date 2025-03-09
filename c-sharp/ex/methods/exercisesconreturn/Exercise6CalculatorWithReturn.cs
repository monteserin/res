using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Exercise6CalculatorWithReturn
  {
    int Sum(int n1, int n2)
    {
      int result = n1 + n2;
      return result;
    }

    int Subtraction(int n1, int n2)
    {
      int result = n1 - n2;
      return result;
    }

    int Multiply(int n1, int n2)
    {
      int result = n1 * n2;
      return result;
    }

    int Divide(int n1, int n2)
    {
      int result = n1 / n2;
      return result;
    }

    static void Main(string[] args)
    {
      Exercise6CalculatorWithReturn exercise6CalculatorWithReturn = new Exercise6CalculatorWithReturn();
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
        result = exercise6CalculatorWithReturn.Sum(n1, n2);
      }
      else if (op == "-")
      {
        result = exercise6CalculatorWithReturn.Subtraction( n1 , n2);
      }
      else if (op == "*")
      {
        result = exercise6CalculatorWithReturn.Multiply( n1, n2);
      }
      else if (op == "/")
      {
        result = exercise6CalculatorWithReturn.Divide( n1 , n2);
      }
      Console.WriteLine("Resultado: " + result);
    }
  } 
}
