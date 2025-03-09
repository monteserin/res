using System;
using System.Collections.Generic;
using System.Text;

namespace AbstractClass
{
  class Dog : Animal 
  {
    string sound;
    public Dog() : base()
    {

    }

    public override void SetSound()
    {
      this.sound = "guauguau";
    }
  }
}


