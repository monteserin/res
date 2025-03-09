package incrementalkey;
import org.hibernate.Session;
import org.hibernate.Transaction;

public class Main {
    public static void main(String[] args) {

        Session session = HibernateUtil.getSessionFactory().openSession();
        Transaction transaction = session.beginTransaction();
        Alumno alumno = new Alumno();
        alumno.setNombre("Paco2");

        Asignatura asignatura = new Asignatura();
        asignatura.setNombre("Matemáticas");

        AlumnoAsignaturaAssociation aso = new AlumnoAsignaturaAssociation();
        aso.setAlumno(alumno);
        aso.setAsignatura(asignatura);
        aso.setNota(5);

        session.save(alumno);
        session.save(asignatura);
        session.save(aso);

        
        
        transaction.commit();
        session.close();


    }
}
