using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Exercises.linq
{
 
  class MainClass
  {
 static void Main()
    {
      Person p1 = new Person();
      p1.name = "Paco";
      p1.age = 18;
      Person p2 = new Person();
      p2.name = "Juan";
      p2.age = 38;
      Person p3 = new Person();
      p3.name = "Raquel";
      p3.age = 55;
      List<Person> persons = new List<Person>();

      persons.Add(p1);
      persons.Add(p2);
      persons.Add(p3);

      var query = from p in persons where p.age == 38 select p;
      Person selectedPerson = query.ToList()[0];

      Console.WriteLine(selectedPerson.name);
    }

  }
}
