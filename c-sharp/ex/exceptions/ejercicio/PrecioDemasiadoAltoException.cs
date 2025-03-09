using System;
using System.Collections.Generic;
using System.Text;

namespace EjercicioExcepcion
{
  class PrecioDemasiadoAltoException : Exception
  {

    public PrecioDemasiadoAltoException(): base("El precio es demasiado alto")
    {

    }
}
}
