using System;
using System.Collections.Generic;
using System.Text;

namespace AbstractClass
{
  class Cow : Animal 
  {
    string sound;
    public Cow() : base()
    {

    }

    public override void SetSound()
    {
      this.sound = "muuuuuu";
    }
  }
}


