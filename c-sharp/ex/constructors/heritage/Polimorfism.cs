using System;
using System.Collections.Generic;
using System.Text;

namespace ConstructorsAndHeritage
{
  class Animal
  {
    public void makeSound()
    {
      Console.WriteLine("Grr...");
    }
  }
  class Cat : Animal
  {
    public void makeSound()
    {
      Console.WriteLine("Meow");
    }
  }
  class Dog : Animal
  {
    public void makeSound()
    {
      Console.WriteLine("Woof");
    }
  }
}


