using System;
using System.Collections.Generic;
using System.Text;

namespace InheritanceExample
{
  class TraductorMaster : ITranslate
  {
  public void translate(string txt)
    {
      Console.WriteLine(txt + " traducido");
    }
  }
}


