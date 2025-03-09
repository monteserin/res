using System;
using System.Collections.Generic;
using System.Text;

namespace POCOExample
{
  class POCOExample
  {
    static void Main(string[] args)
    {
      POCO1 poco1 = new POCO1();
      poco1.name = "Juan";
      Console.WriteLine(poco1.name);

      POCO2 poco2 = new POCO2();
      poco2.name = "Paco";
      Console.WriteLine(poco2.name);
    }
  }

  class POCO1
  {
    public string name { get; set; }
    public int age { get; set; }
  }

  class POCO2
  {
    private string _name;
    private int _age;
    public string name
    {
      get { return _name; }
      set { _name = value; }
    }

    public int age
    {
      get { return _age; }
      set { _age = value; }
    }

  }
}
