using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;

namespace Exercises
{
  class IterateCollection
  {
    static void Main(string[] args)
    {
      List<Alumno> alumnos = new List<Alumno>();
      alumnos.Add(new Alumno("Paco", 10));
      alumnos.Add(new Alumno("Hachi", 80));
      alumnos.Add(new Alumno("Pablo", 17));

      foreach (Alumno item in alumnos)
      {
        Console.WriteLine(item.nombre);
      }

    }
  }

  class Alumno
  {
    private string _nombre;
    private int _edad;

    public Alumno(string nombre, int edad)
    {
      this._nombre = nombre;
      this._edad = edad;
    }
    public string nombre
    {
      get { return _nombre; }
      set { _nombre = value; }
    }

    public int edad
    {
      get { return _edad; }
      set { _edad = value; }
    }
  }
}
