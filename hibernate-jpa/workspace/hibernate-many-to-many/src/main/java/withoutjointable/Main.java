package withoutjointable;

import org.hibernate.Session;
import org.hibernate.Transaction;

import java.util.ArrayList;

public class Main {
  public static void main(String[] args) {
    Session session = HibernateUtil.getSessionFactory().openSession();
    Transaction transaction = session.beginTransaction();

    Alumno alumno = new Alumno();
    alumno.setNombre("Paco2");

    Asignatura asignatura = new Asignatura();
    asignatura.setNombre("Matemáticas");

    ArrayList<Asignatura> asignaturas = new ArrayList<>();
    asignaturas.add(asignatura);

    ArrayList<Alumno> alumnos = new ArrayList<>();
    alumnos.add(alumno);

    asignatura.setAlumnos(alumnos);
    alumno.setAsignaturas(asignaturas);

    session.save(alumno);
    session.save(asignatura);

    transaction.commit();
    session.close();
  }
}
