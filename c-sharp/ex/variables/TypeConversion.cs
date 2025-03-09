using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class TypeConversion
  {
    static void Main(string[] args)
    {
      int int_x = 32767;
      int int_y = 32768;
      int int_z = 32769;
      // El rango de un dato de tipo short llega hasta 32767

      short short_x = (short)int_x;
      short short_y = (short)int_y;
      short short_z = (short)int_z;

      Console.WriteLine("1 - Conversión a short del int 32767: " + short_x);
      Console.WriteLine("2 - Conversión a short del int 32768: " + short_y);
      Console.WriteLine("2 - Conversión a short del int 32769: " + short_z);

      byte byte_x = (byte)int_x;
      byte byte_y = (byte)int_y;
      byte byte_z = (byte)int_z;

      Console.WriteLine("3 - Conversión a byte del int 32767: " + byte_x);
      Console.WriteLine("4 - Conversión a byte del int 32768: " + byte_y);
      Console.WriteLine("5 - Conversión a byte del int 32769: " + byte_z);
    }
  }
}
