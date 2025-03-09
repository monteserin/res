using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class TravelCost
  {
    int HotelPrice(int nights)
    {
      int result = nights * 140;
      return result;
    }

    int AirPlanePrice(string city)
    {
      if (city == "Oviedo") return 15;
      else if (city == "Tokyo") return 700;
      else if (city == "Madrid") return 90;
      else if (city == "Barcelona") return 90;
      return 0;
    }

    int RentCatPrice(int dias)
    {
      int resultado = dias * 40;
      if (dias >= 7) resultado -= 50;
      else if (dias >= 3) resultado -= 20;
      return resultado;
    }


    static void Main(string[] args)
    {
      TravelCost travelCost = new TravelCost();
      int nights = 0;
      Console.WriteLine("Introduzca el número de noches");
      int.TryParse(Console.ReadLine(), out nights);
      Console.WriteLine("Introduzca el nombre del destino");
      string target = Console.ReadLine();

      int r1 = travelCost.HotelPrice(nights);
      int r2 = travelCost.AirPlanePrice(target);
      int r3 = travelCost.RentCatPrice(nights);

      int totalPrice = r1 + r2 + r3;
      Console.WriteLine("Resultado: " + totalPrice);
    }
  } 
}
