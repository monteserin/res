using System;
using System.Collections.Generic;
using System.Text;

namespace InheritanceExercise
{
  class Person
  {
    static int numInstances = 0;
    public Person()
    {
      numInstances++;
    }
  }

}


