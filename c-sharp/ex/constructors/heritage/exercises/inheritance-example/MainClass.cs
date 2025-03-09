using System;
using System.Collections.Generic;
using System.Text;

namespace InheritanceExample
{
  class MainClass
  {
    static void Main(string[] args)
    {
      ITranslate implementacionEscogida = new TraductorMaster();
      Connector conector = new Connector(implementacionEscogida);
      conector.traducir("Hola");
    }
  }
}


