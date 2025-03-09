using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class MiArrayList
  {
    static void Main(string[] args)
    {
      ArrayList arrayList = new ArrayList();
      arrayList.Add("cow");
      arrayList.Add("dog");
      arrayList.Add("elephant");

      foreach(var item in arrayList)
      {
        Console.WriteLine(item);
      }

    }
  }
}
