using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class Exercise6Calculator
  {
    void Sum(int n1, int n2)
    {
      int result = n1 + n2;
      Console.WriteLine("Area: " + result);
    }

    void Subtraction(int n1, int n2)
    {
      int result = n1 - n2;
      Console.WriteLine("Area: " + result);
    }

    void Multiply(int n1, int n2)
    {
      int result = n1 * n2;
      Console.WriteLine("Area: " + result);
    }

    void Divide(int n1, int n2)
    {
      int result = n1 / n2;
      Console.WriteLine("Area: " + result);
    }

    static void Main(string[] args)
    {
      Exercise6Calculator exercise6Calculator = new Exercise6Calculator();
      int n1 = 0;
      int n2 = 0;
      Console.WriteLine("Introduzca el primer número");
      int.TryParse(Console.ReadLine(), out n1);
      Console.WriteLine("Introduzca el segundo número");
      int.TryParse(Console.ReadLine(), out n2);
      Console.WriteLine("Introduce la operación a realizar");
      string op = Console.ReadLine();
      int resultado = 0;
      if (op == "+")
      {
        exercise6Calculator.Sum(n1, n2);
      }
      else if (op == "-")
      {
        exercise6Calculator.Subtraction( n1 , n2);
      }
      else if (op == "*")
      {
        exercise6Calculator.Multiply( n1, n2);
      }
      else if (op == "/")
      {
        exercise6Calculator.Divide( n1 , n2);
      }

    }
  } 
}
