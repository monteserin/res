using System;
using System.Collections.Generic;
using System.Text;

namespace InheritanceExample
{
  abstract class TranslateAll : ITranslate
  {
    public void translate(string txt)
    {
      Console.WriteLine(txt + "traducido");
    }

  }
}


