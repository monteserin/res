using System;
using System.Collections.Generic;
using System.Text;

namespace AbstractClass
{
  class Cat : Animal
  {
    string sound;
    public Cat() : base()
    {

    }

    public override void SetSound()
    {
      this.sound = "miau";
      throw new NotImplementedException();
    }
  }
}


