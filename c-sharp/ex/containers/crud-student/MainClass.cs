using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;

namespace CrudAlumno
{
  class MainClass
  {
    static void Main(string[] args)
    {
      List <Student> alumnos = new List<Student>();
      bool programaActivo = true;
      while (programaActivo)
      {
        Console.WriteLine("Escoja una opción:");
        Console.WriteLine("1 - Insertar un nuevo alumno.");
        Console.WriteLine("2 - Eliminar un alumno.");
        Console.WriteLine("3 - Modificar los datos de un alumno.");
        Console.WriteLine("4 - Mostrar todos los alumnos almacenados");

        string valor = Console.ReadLine();

        if (valor == "1")
        {
          Console.WriteLine("Introduzca el nombre del alumno insertar");
          string nombre = Console.ReadLine();
          Console.WriteLine("Introduzca la edad del alumno insertar");
          int edad = 0;
          int.TryParse(Console.ReadLine(), out edad);
          Student a = new Student();
          a.name = nombre;
          a.age = edad;
          alumnos.Add(a);
        } else if (valor == "2"){
          Console.WriteLine("Introduzca el nombre del alumno que quiere eliminar");
          string nombre = Console.ReadLine();
          for(int i =0; i < alumnos.Count; i++)
          {
            if (alumnos[i].name == nombre)
              alumnos.RemoveAt(i);
          }

        }
        else if(valor == "3")
        {
          Console.WriteLine("Introduzca el nombre del alumno que quiere modificar");
          string nombre = Console.ReadLine();

          Console.WriteLine("Introduzca el nuevo nombre");
          string nombre2 = Console.ReadLine();

          Console.WriteLine("Introduzca la nueva edad");
          int edad2 = 0;
          int.TryParse(Console.ReadLine(), out edad2);
          for (int i = 0; i < alumnos.Count; i++)
          {
            if (alumnos[i].name == nombre)
            {
              alumnos[i].name = nombre2;
              alumnos[i].age = edad2;
            }
              
          }
        }
        else if(valor == "4")
        {
          foreach (var item in alumnos)
          {
            Console.WriteLine(item.age + " - " + item.age);
          }
        }
      }
    }
  }
}
