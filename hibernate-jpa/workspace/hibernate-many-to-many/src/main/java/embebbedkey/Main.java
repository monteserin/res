package embebbedkey;


import org.hibernate.Session;
import org.hibernate.Transaction;

public class Main {
    public static void main(String[] args) {
        Session session = HibernateUtil.getSessionFactory().openSession();
        Transaction transaction = session.beginTransaction();

        Alumno alumno = new Alumno();
        alumno.setNombre("Lucia");

        Asignatura asignatura = new Asignatura();
        asignatura.setNombre("Lengua");

        session.save(alumno);
        session.save(asignatura);

        AlumnoAsignaturaAssociationId id = new AlumnoAsignaturaAssociationId();
        id.setAlumno_id(alumno.getId());
        id.setAsignatura_id(asignatura.getId());

        AlumnoAsignaturaAssociation aso = new AlumnoAsignaturaAssociation();
        aso.setAlumno(alumno);
        aso.setAsignatura(asignatura);
        aso.setNota(5);
        aso.setId(id);


        session.save(aso);



        transaction.commit();
        session.close();
    }
}
