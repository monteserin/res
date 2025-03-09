using System;
using System.Collections.Generic;
using System.Text;

namespace Exercises.delegates
{
  public delegate void ShowValue(string uuuuu);
  class MyDelegate
  {
    //El evento myEvent llamará al método delegado ShowValue
    public event ShowValue myEvent;

     public void IterateValues()
    {
      for(int i = 0; i < 10; i++)
      {
        //Detonamos el evento myEvent que llamará al método delegado (PrintValue, que viene a sustituir a ShowValue)
        myEvent(i.ToString());
      }
    }
  }
}
