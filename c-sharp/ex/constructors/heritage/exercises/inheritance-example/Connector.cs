using System;
using System.Collections.Generic;
using System.Text;

namespace InheritanceExample
{
  class Connector
  {
    private ITranslate traductor;

    public Connector(ITranslate implementacionTraductor)
    {
      this.traductor = implementacionTraductor;
    }

    // En un caso real, con inyector de dependencias, el método traducir no sería necesario,
    // podríamos llamar directamente al método translate a partir de la interfaz
    public void traducir(string texto)
    {
      this.traductor.translate(texto);
    }
  }
}

