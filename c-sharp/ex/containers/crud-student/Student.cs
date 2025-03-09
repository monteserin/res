using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;

namespace CrudAlumno
{
  class Student
  {
    private string _name;
    private int _age;
    public string name
    {
      get{return _name;}
      set{_name = value;}
    }

    public int age
    {
      get { return _age; }
      set { _age = value; }
    }

  }
}
