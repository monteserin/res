using System;
using System.Collections.Generic;
using System.Text;

namespace WhatWillHappen
{
  class WhatWillHappen
  {
    static void Main(string[] args)
    {
      Son h = new Son("Hello!");
      h.ShowMessage();
     
    }
  }
  class Father
  {
    string message;
    public Father(string message)
    {
      this.message = message;
    }
    public void ShowMessage()
    {
      Console.WriteLine(message);
    }
  }
  class Son : Father
  {
    public Son(string message):base(message)
    {
     
    }
  }
}


