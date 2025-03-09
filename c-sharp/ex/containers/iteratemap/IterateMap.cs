using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;

namespace IterateMap
{
  class IterateMap
  {
    static void Main(string[] args)
    {
      Person p1 = new Person();
      p1.name = "Juan";
      p1.age = 15;
      p1.dni = "47362783W";
      Person p2 = new Person();
      p2.name = "Raquel";
      p2.age = 45;
      p2.dni = "47364758W";
      Person p3 = new Person();
      p3.name = "Oscar";
      p3.age = 48;
      p3.dni = "84824738W";

      HashSet<Person> personas = new HashSet<Person>();

      personas.Add(p1);
      personas.Add(p2);
      personas.Add(p3);

      foreach(var item in personas)
      {
        Console.WriteLine(item.name + " - " + item.age);
      }

    }
  }
}
