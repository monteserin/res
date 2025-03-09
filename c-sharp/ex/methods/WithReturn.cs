using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class WithReturn
  {
    public string Greet(string parameter)
    {
      string salutation = "Buenas tardes " + parameter;
      return salutation;
    }
    static void Main(string[] args)
    {
      WithReturn withReturn;
      withReturn = new WithReturn();
      withReturn.Greet("John");
    }
  }
}
