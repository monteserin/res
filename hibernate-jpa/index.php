<?php 
$titulo_curso="Hibernate y JPA";
$meta_description = 'En este curso veremos el ORM más extendido de Java para realizar operaciones contra la base de datos';
$img_curso = 'curso-hibernate.svg';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";
//include $path."diapos_theme/head.php";
//add_action( 'genesis_after_header', function(){
	global $dots;
?>	

<section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">
	<ol>
		<li><a href="#para_que_sirve">¿Para qué sirve?</a></li>
			<li><a href="#clave-primaria">Clave Primaria</a></li>
			<li><a href="#instalacion">Instalación</a></li>
			<li><a href="#transacciones">Transacciones</a></li>

			<li><a href="#metodos-session">Session</a></li>
			
			<li><a href="#claves-foraneas">Claves foráneas</a></li>

			<li><a href="#carga-perezosa">Carga perezosa</a></li>
			<li><a href="#ejercicio-autor">Ejercicio autor</a></li>

			<li><a href="#criteria">Criteria</a></li>

			<li><a href="#hql">HQL</a></li>
			
			<li><a href="#ejercicio-global">Ejercicio global</a></li>
			<li><a href="#relacion-n-a-n">Crear una relación n a n</a></li>
			<li><a href="#ejercicio-hospital">Ejercicio hospital</a></li>
			<li><a href="#jpa">JPA (Java Persistence)</a></li>
			</ol>';

                </article></section>
<main class="curso">
<?// drawH1WithImg() ?>

<article><div>

<h2 id="para_que_sirve">¿Para qué sirve?</h2>
<div class="row">
	<div class="col-md-10"><ul>
	<li>Disminuye la cantidad de código usado.</li>
	<li>Simplifica la interacción con la base de datos.</li>
	<li>Optimiza el acceso a la base de datos.</li>
</ul>
</div>
	<div class="col-md-2"><?// getRes("video_premium abierto",258468657) ?></div>
</div>
			

	<h3 id="orm">ORM</h3>
	<p>Object Relational Mapping. Se encarga de transformar las tablas en clases, los campos en propiedades y viceversa.</p>


	<h3 id="clave-primaria">Clave primaria</h3>

	<div class="row">
		<div class="col-md-10">	<p>Usando Hibernate: </p>
<ul>
	<li>es fundamental que las tablas tengan clave primaria.</li>
	<li>no es posible modificar claves primarias.</li>
</ul>
</div>
		<div class="col-md-2"><?// getRes("video_premium abierto",258468771) ?></div>
	</div>
			
</div></article>
<article><div>
<h2 id="instalacion">Instalación</h2>
			

			<div class="row">
				<div class="col-md-10"><ol>
	<li>Descargamos las librerías de Hibernate: <a target="_blank" href="http://hibernate.org/orm/releases/">http://hibernate.org/orm/releases/</a></li>
	<li>Creo una carpeta <span class="bold">lib</span> en mi proyecto.</li>
	<li>De entre los ficheros descargados, copio el contenido de la carpeta <span class="bold">lib/required</span> en la carpeta lib en mi proyecto.</li>
	<li>Copio el driver de mysql en la carpeta lib de mi proyecto.</li>
	<li>Refresco el proyecto para que coja los cambios realizados.</li>
	<li>Añado al java build path del proyecto los jar que están dentro de la carpeta <span class="bold">lib</span>, así como el driver MySQL.</li>
	<li>Creamos la base de datos. En el siguiente paso estableceremos los datos de conexión a la misma.</li>
	<li>Creamos el fichero <span class="bold">hibernate.cfg.xml</span> en la carpeta src y le pegamos el siguiente código:
</div>
				<div class="col-md-2"><?// getRes("video_premium abierto",258472255) ?></div>
			</div>
<pre><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;!DOCTYPE hibernate-configuration PUBLIC
&quot;-//Hibernate/Hibernate Configuration DTD 3.0//EN&quot;
&quot;http://hibernate.sourceforge.net/hibernate-configuration-3.0.dtd&quot;&gt;
&lt;hibernate-configuration&gt;
&lt;session-factory&gt;
&lt;property name=&quot;hibernate.connection.driver_class&quot;&gt;com.mysql.jdbc.Driver&lt;/property&gt;
&lt;property name=&quot;hibernate.connection.isolation&quot;&gt;2&lt;/property&gt;
&lt;property name=&quot;hibernate.connection.password&quot;&gt;pp&lt;/property&gt;
&lt;property name=&quot;hibernate.connection.pool_size&quot;&gt;10&lt;/property&gt;
&lt;property name=&quot;hibernate.connection.url&quot;&gt;jdbc:mysql://localhost/prueba&lt;/property&gt;
&lt;property name=&quot;hibernate.connection.username&quot;&gt;root&lt;/property&gt;
&lt;property name=&quot;hibernate.current_session_context_class&quot;&gt;managed&lt;/property&gt;
&lt;property name=&quot;hibernate.dialect&quot;&gt;org.hibernate.dialect.MySQL57Dialect&lt;/property&gt;
&lt;property name=&quot;hibernate.show_sql&quot;&gt;true&lt;/property&gt;
&lt;property name=&quot;hbm2ddl.auto&quot;&gt;update&lt;/property&gt;
&lt;/session-factory&gt;
&lt;/hibernate-configuration&gt;</code></pre>

	</li>
	<li>Creamos el fichero <span class="font-weight-bold">HibernateUtil.java</span> para establecer la conexión
<pre><code>public class HibernateUtil {
	private static StandardServiceRegistry registry;
	private static SessionFactory sessionFactory;

	public static SessionFactory getSessionFactory() {
		if (sessionFactory == null) {
			try {
				registry = new StandardServiceRegistryBuilder().configure().build();
				MetadataSources sources = new MetadataSources(registry);
				<span class="font-weight-bold">sources.addAnnotatedClass(Alumno.class);</span>
				Metadata metadata = sources.getMetadataBuilder().build();
				sessionFactory = metadata.getSessionFactoryBuilder().build();
			} catch (Exception e) {
				e.printStackTrace();
				if (registry != null) {
					StandardServiceRegistryBuilder.destroy(registry);
				}
			}
		}
		return sessionFactory;
	}
}</code></pre>

	</li>
	<li>Creamos el paquete entity (pojos de hibernate) y una clase de prueba
<pre><code>import javax.persistence.Entity;
import javax.persistence.Id;

<span class="font-weight-bold">@Entity</span>
public class Alumno {
	<span class="font-weight-bold">@Id</span>
	<span class="font-weight-bold">@GeneratedValue(strategy=GenerationType.IDENTITY)</span><span class="green">//Para generar números autoincrementados</span>
	private int id;
	private String nombre;
	private int edad;

	<span class="green bold">//Tener en cuenta que si definimos un constructor, este debe ser público</span>
	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public int getEdad() {
		return edad;
	}

	public void setEdad(int edad) {
		this.edad = edad;
	}

}</code></pre>
	</li>
</ol>

<h3>Errores de puertos</h3>
<p>Si al arrancar el servidor de apache y el servidor de mysql tuviese algún conflicto  de puertos...</p>

<ul>
	<li>Debo comprobar aplicaciones en la barra de tareas que sean susceptibles de estar usando alguno de los puertos que necesito (Mysql Monitor, etc.)</li>
	<li>En windows, ejecutando <strong>services.msc</strong> puedo ver todos los servicios que se están ejecutando en el sistema. Debo detener (si estuviesen) los de:
		<ul>
			<li>VM Ware</li>
			<li>Servicio de Publicación World Wide Web</li>
			<li>Skype</li>
		</ul>
	</li>
</ul>
</div></article><article><div>
	<h2 id="transacciones">Transacciones</h2>
	<p>Conjunto de operaciones contra la base de datos que se realizan de forma atómica (o todas o ninguna).</p>
	<p><span class="font-weight-bold">¿Cuando nos interesa crear una transacción?</span> Cuando modificamos la base de datos (y por tanto deseamos poder hacer rollback()). Para una consulta no es necesario. Crear una transacción consume recursos.</p>
<ul>
	<li><span class="font-weight-bold">Un objeto Session Hibernate representa una única unidad-de-trabajo y es abierta por un ejemplar de SessionFactory</span>. <span class="font-weight-bold">Se deben cerrar las sesiones cuando se haya completado todo el trabajo de una transación</span>.</li>
	<li>En caso de fallo, lo que hay dentro del beginTransaction y el commit no se ejecuta y se salta a un catch.</li>
	<li>Siempre es más rápido hacer dos operaciones en una sola transacción que dos operaciones en dos transacciones.</li>
</ul>
<pre><code><span class="font-weight-bold">Session session = HibernateUtil.getSessionFactory().openSession();
Transaction transaction = session.beginTransaction();</span>
Alumno al = new Alumno();
al.setNombre("Juan");
al.setEdad(10);
		
<span class="font-weight-bold">session.save(al);
transaction.commit();
session.close();</span></code></pre>

	<h4>setTimeout()</h4>
	<pre><code>sesion.beginTransaction().setTimeout(400);</code></pre>
	<div class="row">
		<div class="col-md-10"><ul>
		<li>Si pasados 400 milisegundos la base de datos no devuelve nada, se arrojará una UnCaught Eception (una excepción para la que no es estrictamente neceario tener un try catch; al contrario que las Caught Exception).</li>
		<li>Este timeout se puede gestionar a nivel de aplicación o a nivel de base de datos.</li>
	</ul></div>
		<div class="col-md-2"><?// getRes("video_premium",258468664) ?></div>
	</div>
	
				

	<h2 id="metodos-session">Métodos de la clase Session</h2>
<div class="row">
	<div class="col-md-10">	<pre><code>session.save(persona) <span class="green">// guarda un objeto como registro en la base de datos.</span>
session.refresh(persona) <span class="green">// en nos permitirá conocer la id del objeto insertado, suponiendo que la id sea autoincrementada.</span>
session.update(persona);
session.saveOrUpdate(persona);
session.get(Persona.class, id) <span class="green">// me permite recuperar datos.</span>
<span class="green">// el método load lo usamos sólo para borrar un paciente. ya que nos devuelve un paciente sólo con la clave primaria seteada. Para recuperar todos los valores usaremos get.</span>
Persona personaABorrar = (Persona) session.load(Persona.class, idPaciente);
session.delete(personaABorrar);</code></pre></div>
	<div class="col-md-2"><?// getRes("video_premium",258468675) ?></div>
</div>

	


	<h2 id="claves-foraneas">Claves foráneas</h2>

<div class="row">
	<div class="col-md-10">	<p>El siguiente código SQL genera una relación 1 a muchos:</p>

<pre><code>
ALTER TABLE libro ADD CONSTRAINT fk_autor FOREIGN KEY ( id_autor ) REFERENCES autor( id )</code></pre>
<p>El código para generar una relación uno a uno sería igual, pero cambiando los nombres de los campos a los que hago referencia:</p>
<p>ALTER TABLE autor ADD FOREIGN KEY ( id ) REFERENCES padre_autor (id) </p>
</div>
	<div class="col-md-2"><?// getRes("video_premium",258468683) ?></div>
</div>

	
<div class="notas">
<p>
	<span class="font-weight-bold">Nota:</span>
Para asignar las foreing keys es necesario que: </p>
<ul>
	<li>los tipos de datos de los campos relacionados coincidan.</li>
	<li>Las tablas deberían estar vacías, u obtendremos un error del tipo "Table already exists".</li>
	<li>El motor de las tablas sea InnoDB.</li>
</ul>

<img src="img/diagrama-hibernate.svg" alt="diagrama hibernate">
</div>

</div></article>

<article><div>

	<h2 id="carga-perezosa">Carga perezosa</h2>

<div class="row">
	<div class="col-md-10">	<p>Es una estrategia que consiste en demorar la carga de un objeto hasta que este sea requerido.</p>
	<p>Es decir, la carga del objeto se realiza de manera explícita cuando este es invocado.</p>
	<p>Lazy loading se utiliza en aquellos casos en los que la aplicación necesita acceder solo a una parte de un objeto.</p>
	<p>En general la carga perezosa sólo se utiliza en las colecciones 1-n y n-n. 
Está por defecto a lazy true. Es posible usar usar la cargas perezosas en relaciones 1-1 pero no es sencillo ni frecuente.</p></div>
	<div class="col-md-2"><?// getRes("video_premium",258468991) ?></div>
</div>

		

</div></article>
<article><div>
<h2 id="ejercicio-autor">Ejercicio autor</h2>
			
	<h3>Establecer la relación 1-n en los pojos</h3>
	
	<div class="row">
		<div class="col-md-10">	<pre><code>@Entity
public class Autor {
	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)	
	private int id;

	private String nombre;
	
	@OneToMany(cascade=CascadeType.ALL, fetch = FetchType.EAGER, mappedBy="autor") <span class="green">//eager = carga ansiosa</span>
	private List&lt;Libro&gt; libros;</code></pre></div>
		<div class="col-md-2"><?// getRes("video_premium",258472258) ?></div>
	</div>


<pre><code>@Entity
public class Libro {
	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	private int id;
    
	private String titulo;

	@ManyToOne
	private Autor autor;</code></pre>

	<h4>Insertar un autor</h4>
<pre><code>Session session = HibernateUtil.getSessionFactory().openSession();
Transaction transaction = session.beginTransaction();
Autor autor = new Autor();
autor.setNombre("Juan");
		
session.save(autor);
transaction.commit();
session.close();</code></pre>

	<h3>Insertar un autor y sus libros</h3>
	
<pre><code>Session session = HibernateUtil.getSessionFactory().openSession();
Transaction transaction = session.beginTransaction();
Autor autor = new Autor();
List&lt;Libro&gt; libros = new ArrayList&lt;Libro&gt;();
libros.add(new Libro(autor, "titulo1"));
libros.add(new Libro(autor, "titulo2"));
autor.setNombre("Juan");
autor.setLibros(libros);
session.save(autor);
transaction.commit();
session.close();</code></pre>


	<h3>session.flush()</h3>
	<p>Este método se asegura de que la información ha sido persistida en la base de datos, de forma que ya sea posible cerrar con seguridad la session. </p>
	<p>Este método es ejecutado automáticamente por session.close(), no obstante es recomendable que siempre lo ejecutemos explícitamente justo antes.</p>
	<p>Puede ser útil hacer un flush para recuperar la id autoincrementada de un objeto recien insertado. Ejemplo:	</p>
<pre><code>session.save(persona);
session.flush();
id = persona.getId();</code></pre>

</div></article>
<article><div>
<h2 id="criteria">Criteria</h2>
<p>Se utiliza para hacer consultas</p>
	<h4>Métodos de la clase Criteria</h4>

<div class="row">
	<div class="col-md-7">	<pre><code>Session session = HibernateUtil.getSessionFactory().openSession();
		
		CriteriaBuilder builder = session.getCriteriaBuilder();
		CriteriaQuery&lt;Autor&gt; criteria = builder.createQuery(Autor.class);
		Root&lt;Autor&gt; root = criteria.from(Autor.class);
		criteria.select(root).where(builder.equal(root.get("nombre"), "Juan"));
		TypedQuery&lt;Autor&gt; q=session.createQuery(criteria);
				
		<span class="green">//List&lt;Autor&gt; list = q.getResultList();</span>
		Autor cicloResultado = q.getSingleResult();</code></pre></div>
	<div class="col-md-5">	<div class="notas">
		<p><span class="font-weight-bold">Nota: </span>
Utilizando Criteria no es necesario hacer commit(), ya que la llamada a este método es para materializar cambios en la base de datos.</p>
	</div></div>
</div>





	<h4>Ejercicio 5 libros</h4>
	<p>Insertar 5 libros en la base de datos.  Dos registros deben tener el mismo título (''titulo1'').</p>
	<p>Utilizar la clase criteria para mostrar los libros cuyo título contenga la palabra ''titulo1''. Así es como ejecutaremos una sentencia de tipo like:</p>
	<pre><code>criteria.select(root).where(builder.like(root.&lt;String&gt;get("titulo"), "%titulo1%"));</code></pre>

	<p>Hacer una nueva consulta, ordenando la salida por el título, e ir recorriéndola imprimiendo los títulos y las id con System.out.println();</p>
<pre><code>criteria.orderBy(builder.asc(root.get("titulo")));</code></pre>	
	<p>
ID:1    Título:titulo1 <br>
ID:5    Título:titulo1 <br>
ID:6    Título:titulo2 <br>
ID:2    Título:titulo3 <br>
ID:4    Título:titulo4 <br>
ID:3    Título:titulo5	 <br>
	</p>
</div></article>
<article><div>
	<h2 id="hql">HQL</h2>

	<pre><code><span class="font-weight-bold">Definir consultas</span>
<span class="green">//recupero una colecci&oacute;n de objetos</span>
Query&lt;Libro&gt; hqlQuery1 = session.createQuery("FROM  Libro");
<span class="green">//recupero un String en vez de un objeto</span>
Query&lt;String&gt; hqlQuery2 = session.createQuery(&quot;SELECT v.matricula FROM Vehiculo v&quot;);
<span class="green">//Consulta ordenada</span>
Query&lt;Libro&gt; hqlQuery3 = session.createQuery("FROM Libro ORDER BY id");
<span class="green">//Consulta con condiciones</span>
Query&lt;Libro&gt; hqlQuery4 = session.createQuery("FROM Libro WHERE precio>10 AND anio_publicacion>1984");

<span class="font-weight-bold">Ejecutar consulta</span>
List&lt;Libro&gt; libros = hqlQuery.list();
Libro libro = hqlQuery.getSingleResult();

<span class="font-weight-black">Eliminar un registro</span>
Query hqlQuery = session.createQuery(&quot;DELETE FROM Paciente WHERE id=(:condicion)&quot;);
hqlQuery.setParameter("condicion", 4);
hqlQuery.executeUpdate();</code></pre>

	<h3>Evitar inyección SQL</h3>
<pre><code><span class="font-weight-bold">Se debe evitar crear consultas HQL concatenando Strings:</span>
String queryString = &quot;from item i where i description like ' &quot; + search + &quot; ' &quot;;


<span class="font-weight-bold">En cambio es aconsejable usar:</span>
String queryString = "FROM Libro WHERE titulo LIKE (:condicion)";
hqlQuery.setParameter("condicion", "%tit%");
List result2 = hqlQuery2.list();</code></pre>


	<h3>Consulta relacionada</h3>
	<pre><code>
<span class="font-weight-bold">Evaluar si una propiedad del bean es igual a cierto valor
(no funciona si la propiedad es una lista)</span>
<span class="green">String queryString = "FROM Libro l WHERE l.<span class="red">autor.nombre</span> LIKE (:condicion)";</span>

<span class="font-weight-bold">Evaluar si uno de los los elementos de la propiedad del bean consultado es igual a cierto valor</span>
String queryString = &quot; SELECT a FROM Autor a JOIN a.libros l WHERE l.titulo='titulox11'&quot;;
Query hqlQuery = session.createQuery(queryString);</code></pre>
	<div class="notas">
		<p><span class="font-weight-bold">Nota:</span>
La siguiente línea es equivalente a la línea en verde (pero utilizando join): <br>
<pre><code>
String queryString = &quot;select l from Libro l join l.autor a where a.nombre='nombre1'&quot;;
</code></pre>
		</p>
		<p>Las palabras escritas en rojo son propiedades de las clases, no son campos de la base de datos.</p>
	</div>
</div></article>

<article><div>

	<h2 id="ejercicio-global">Ejercicio</h2>
	<p>Dada la siguiente estructura:</p>
		<img src="img/siniestro-vehiculo.svg" alt="diagrama ejercicio siniestro vehículo">
<p>Ejecutar las siguientes consultas</p>
	<ol>
		<li>Listar las matrículas de todos los vehículos.</li>
		<li>Listar la matrícula y la marca de todos los vehículos ordenados por número de ruedas.</li>
		<li>Listar la matrícula de todos los vehículos que tengan más de dos asientos y más de dos ruedas.</li>
		<li>Listar la matrícula de todos los vehículos que tengan más de dos asientos o más de dos ruedas.</li>
		<li>Listar la matrícula de todos los vehículos que tengan una matrícula de menos de seis caracteres (where length(v.matricula)&lt;?).</li>
		<li>Listar la matrícula de todos los vehículos que hayan tenido un siniestro con perdida mayor de 1000 euros.</li>
		<li>Listar la matrícula de todos los vehículos que hayan tenido un siniestro con perdida mayor de 1000 euros. Mostrar a cuanto ascendió la pérdida. <br>
		Almacenar el resultado de la la consulta en: 
		<ul>
			<li><span class="black bold">Una lista de listas de dos elementos</span>; el primero será un bean de Vehículo y el segundo un Integer. La siguiente línea me devuelve  una lista de listas de dos elementos; el primero será un bean y el segundo un String.
<pre><code>select new List(v, s.perdida) from Vehiculo... </code></pre></li>
<li><span class="black bold">Una lista de beans VehiculoSiniestro</span>, que tendrán cada uno dos propiedades, Vehiculo e Integer. Habrá que crear la clase VehiculoSiniestro con su correspondiente constructor. 
<pre><code>select new com.pablomonteserin.main.VehiculoSiniestro(v, s.perdida)...</code></pre>
</li>
		</ul> 

<p>Cómo no resolver este ejercicio:</p>
	<pre><code>select v.matricula, v.marca from Vehiculo v order by v.ruedas</code></pre>

	<p>Si ejecutamos esta consulta y pretendemos recorrerla, estaríamos recorriendo una lista de un array de Objects:</p>
	<pre><code>List &lt;Object[]&gt;result = hqlQuery.list();
Iterator&lt;Object[]&gt; it = result.iterator();
while(it.hasNext()){
	Object[] obj =  it.next();				 
	System.out.println(&quot;Matricula: &quot;+ obj[0]);
	System.out.println(&quot;Marca: &quot;+ obj[1]);</code></pre>
		</li>
	</ol>


<? // getRes("video_premium abierto", 'tsFpPn7DMt4' ) ?>
	<h3 id="ejercicio_global">Ejercicio</h3>
	<p>Dada la siguiente estructura:</p>
		<img src="img/profesor-curso.svg" alt="diagrama ejercicio profesor curso">
<p>Ejecutar las siguientes consultas</p>
	<ol>
		<li>Listar los nombres de todos los profesores.</li>
		<li>Listar el nombre y el apellido de todos los profesores ordenados por edad. <br>


Cómo no resolver este ejercicio: <br>
	<pre><code>select p.nombre, p.apellido from Profesor v order by p.edad</code></pre>

	<p>Si ejecutamos esta consulta y pretendemos recorrerla, estaríamos recorriendo una lista de un array de Objects:</p>
	<pre><code>List &lt;Object[]&gt;result = hqlQuery.list();
Iterator&lt;Object[]&gt; it = result.iterator();
while(it.hasNext()){
	Object[] obj =  it.next();				 
	System.out.println(&quot;Nombre: &quot;+ obj[0]);
	System.out.println(&quot;Apellido: &quot;+ obj[1]);</code></pre>
		</li>
		<li>Listar el nombre de todos los profesores que tengan más de treinta años y tengan más de 5 años de experiencia.</li>
		<li>Listar el nombre de todos los profesores que tengan más de treinta años o tengan más de 5 años de experiencia.</li>

		<li>Listar el nombre de todos los profesores que tengan un nombre de menos de seis caracteres (where length(p.nombre)&lt;?).</li>
		<li>Listar el nombre de todos los profesores que hayan impartido un curso de más de 500 euros.</li>
		<li>Listar el nombre de todos los profesores que hayan impartido un curso de más de 500 euros. Mostrar cuanto ćostó dicho curso. <br>
		Almacenar el resultado de la la consulta en: 
		<ul>
			<li><span class="font-weight-bold">Una lista de listas de dos elementos</span>; el primero será un bean de Profesor y el segundo un Integer. La siguiente línea me devuelve  una lista de listas de dos elementos; el primero será un bean y el segundo un String.
<pre><code>select new List(p, c.precio) from Profesor... </code></pre></li>
<li><span class="font-weight-bold">Una lista de beans ProfesorCurso</span>, que tendrán cada uno dos propiedades, Profesor e Integer. Habrá que crear la clase ProfesorCurso con su correspondiente constructor. 
<pre><code>select new com.pablomonteserin.main.ProfesorCurso(p, c.precio)...</code></pre>
</li>
		</ul> 

		</li>
	</ol>


	<h3 id="relacion-n-a-n">Crear una relación n a n</h3>
	<p>Una relación n a n son dos relaciones 1 a n vinculadas a una misma tabla auxiliar. En MySQL WorkBench, podemos establecer dicha relación desde el panel Models → flechita → Create EER Model from Database, de forma que se creará automáticamente la tabla intermedia.</p>
</div></article>

<article><div>

<h2 id="ejercicio-hospital">Ejercicio Alumno</h2>


<p>La aplicación consta de 3 clases: Main, Alumno y Servicio.</p>

<p>La clase Alumno tendrá tres propiedades: id(int), nombre (String) y edad (int).</p>

<p>Al arrancar la aplicación desde el Main se nos preguntará por la operación que deseamos hacer:</p>

<ul>
    <li>Insertar un nuevo alumno. Esta opción nos solicita el nombre y la edad del alumno que queremos insertar.</li>
    <li>Eliminar un alumno. Esta opción nos solicita la id del alumno que deseamos eliminar.</li>
    <li>Modificar los datos de un alumno. Esta opción nos solicita primero la id del alumno para poder identificarlo y luego su nuevo nombre y edad.</li>
    <li>Mostrar todos los alumnos almacenados. Esta opción recorre el ArrayList de alumnos e imprime los nombres de cada uno.</li>
</ul>
<p>La clase servicio tendrá los métodos nuevoAlumno, eliminarAlumno, modificarAlumno y getAlumnos que realizarán las 4 operaciones antes citadas. Haremos las operaciones contra una base de datos utilizando Hibernate.</p>

	<h2 id="jpa">JPA (Java Persistence)</h2>

<div class="row">
	<div class="col-md-10">	<p>Es una especificación standard de la industria del desarrollo con Java para manipular una base de datos relacional utilizando la programación orientada a objetos como aproximación.</p>
	<p>Al ser una especificación, por sí sola no puede manipular la base de datos. Es un conjunto de interfaces que deben ser implementadas.</p>
</div>
	<div class="col-md-2"><?// getRes('recurso','zip/solojpa.zip', 'Descargar recurso') ?></div>
</div>



	<pre><span class="bold">Main.java</span><code>public class Main {
    public static void main(String[] args){
        EntityManagerFactory emf = Persistence.createEntityManagerFactory(&quot;TEST_PERSISTENCE_JPA&quot;);
        EntityManager em = emf.createEntityManager();
      
        Customer customer=new Customer(&quot;Pablo&quot;, &quot;Monteser&iacute;n&quot;);        
        Address address=new Address(&quot;Calle Falsa 123&quot;);
        customer.setAddress(address);
        
        try {
            em.getTransaction().begin();
            em.persist(customer);
            em.getTransaction().commit();

        } catch (Exception e) {
            e.printStackTrace();
        }finally {
            em.close();
        }
    }
}</code></pre>


<pre><span class="bold">src/main/resources/META-INF/persistence.xml</span><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;persistence version=&quot;2.1&quot;
	xmlns=&quot;http://xmlns.jcp.org/xml/ns/persistence&quot;
	xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
	xsi:schemaLocation=&quot;http://xmlns.jcp.org/xml/ns/persistence http://xmlns.jcp.org/xml/ns/persistence/persistence_2_1.xsd&quot;&gt;
	&lt;persistence-unit name=&quot;TEST_PERSISTENCE_JPA&quot;
		transaction-type=&quot;RESOURCE_LOCAL&quot;&gt;
		&lt;class&gt;com.pablo.clase.persistence.model.Customer&lt;/class&gt;
		&lt;class&gt;com.pablo.clase.persistence.model.Address&lt;/class&gt;

		&lt;properties&gt;
			&lt;property name=&quot;javax.persistence.jdbc.driver&quot; value=&quot;com.mysql.jdbc.Driver&quot; /&gt;
			&lt;property name=&quot;javax.persistence.jdbc.url&quot; value=&quot;jdbc:mysql://localhost:3306/prueba-jpa?serverTimezone=UTC&quot; /&gt;
			&lt;property name=&quot;javax.persistence.jdbc.user&quot; value=&quot;pm&quot; /&gt;
			&lt;property name=&quot;javax.persistence.jdbc.password&quot; value=&quot;pp&quot; /&gt;

			&lt;property name=&quot;hibernate.dialect&quot; value=&quot;org.hibernate.dialect.MySQL8Dialect&quot; /&gt;

			&lt;!-- hace cambios --&gt;
			&lt;property name=&quot;hibernate.hbm2ddl.auto&quot; value=&quot;update&quot; /&gt;

			&lt;!-- si los cambios los fastidian todo, no hace cambios --&gt;
			&lt;!-- &lt;property name=&quot;hibernate.hbm2ddl.auto&quot; value=&quot;validate&quot; /&gt; --&gt;

			&lt;!-- &lt;property name=&quot;hibernate.hbm2ddl.auto&quot; value=&quot;create-drop&quot; /&gt; --&gt;
			&lt;property name=&quot;show_sql&quot; value=&quot;true&quot; /&gt;
		&lt;/properties&gt;
	&lt;/persistence-unit&gt;
&lt;/persistence&gt;</code></pre> 

<pre><span class="bold">./pom.xml</span><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
&lt;project xmlns=&quot;http://maven.apache.org/POM/4.0.0&quot;
         xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
         xsi:schemaLocation=&quot;http://maven.apache.org/POM/4.0.0 http://maven.apache.org/xsd/maven-4.0.0.xsd&quot;&gt;
    &lt;modelVersion&gt;4.0.0&lt;/modelVersion&gt;

    &lt;groupId&gt;com.pablo.clase&lt;/groupId&gt;
    &lt;artifactId&gt;solo-jpa&lt;/artifactId&gt;
    &lt;version&gt;1.0-SNAPSHOT&lt;/version&gt;

    &lt;properties&gt;
        &lt;hibernate.version&gt;5.4.2.Final&lt;/hibernate.version&gt;
        &lt;spring.version&gt;5.1.7.RELEASE&lt;/spring.version&gt;
        &lt;jstl.version&gt;1.2&lt;/jstl.version&gt;
        &lt;servletapi.version&gt;4.0.1&lt;/servletapi.version&gt;
    &lt;/properties&gt;

&lt;dependencies&gt;
    &lt;dependency&gt;
        &lt;groupId&gt;org.hibernate&lt;/groupId&gt;
        &lt;artifactId&gt;hibernate-core&lt;/artifactId&gt;
        &lt;version&gt;${hibernate.version}&lt;/version&gt;
    &lt;/dependency&gt;
    &lt;dependency&gt;
        &lt;groupId&gt;mysql&lt;/groupId&gt;
        &lt;artifactId&gt;mysql-connector-java&lt;/artifactId&gt;
        &lt;version&gt;8.0.16&lt;/version&gt;
    &lt;/dependency&gt;
&lt;/dependencies&gt;
    &lt;build&gt;
        &lt;plugins&gt;
            &lt;plugin&gt;
                &lt;groupId&gt;org.apache.maven.plugins&lt;/groupId&gt;
                &lt;artifactId&gt;maven-compiler-plugin&lt;/artifactId&gt;
                &lt;configuration&gt;
                    &lt;source&gt;8&lt;/source&gt;
                    &lt;target&gt;8&lt;/target&gt;
                &lt;/configuration&gt;
            &lt;/plugin&gt;
        &lt;/plugins&gt;
    &lt;/build&gt;
&lt;/project&gt;</code></pre>

<h3> Otras operaciones</h3>
<h4>Consulta de un solo objeto</h4>
<pre><code>TypedQuery&lt;Usuario&gt; query = em.createQuery(&quot;SELECT u from Usuario u WHERE u.nombre=:name AND u.pass=:password&quot;, Usuario.class);
query.setParameter(&quot;name&quot;, nombre);
query.setParameter(&quot;password&quot;, password);</code></pre>


<div class="row">
	<div class="col-lg-3"><h4>Update</h4>            
<pre><code>em.merge(usuario);</code></pre>
</div>
	<div class="col-lg-4"><h4>Remove</h4>
<pre><code>Invitado invitado = em.find(Invitado.class, id);
em.remove(invitado);</code></pre></div>
	<div class="col-lg-5"><h4>Consulta de un listado de objetos</h4>            
<pre><code>Query query = em.createQuery(&quot;SELECT c from Customer&quot;);
List&lt;Customer&gt; result=query.getResultList();</code></pre>	</div>
</div>


		
</div></article>

</main>
<?php 

//});
//include $path."/diapos_theme/footer.php";
?>