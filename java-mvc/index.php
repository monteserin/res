<?php 
$titulo_curso="MVC ☕️";
$meta_description = 'En este curso de Java veremos como estructurar correctamente una aplicación siguiendo el patrón Modelo-Vista-Controlador.';
$img_curso = 'curso-mvc-java.svg';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";
include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
	global $dots;
?>
<section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">


	<ol>
		<li><a href="#mvc">Modelo Vista Controlador (modelo 2)</a></li>
			<li><a href="#procesar_doget">Procesar toda la operativa en doGet o doPost</a></li>
			<li><a href="#ctes">Definir constantes de aplicación en el web.xml</a></li>
			<li><a href="#ejercicios_mvc">Ejercicios MVC</a>
<ol>
	<li><a href="#lista_invitados">Ejercicio - Lista de invitados</a></li>
			<li><a href="#ejercicio_futbol">Ejercicio fútbol</a></li>
			<li><a href="#trabajo_fechas">Trabajo con fechas</a></li>
			<li><a href="#input_type_hidden">Input type hidden</a></li>
			<li><a href="#hospital_I">Hospital</a></li>
			<li><a href="#listado_libros">Listado libros</a></li>
			<li><a href="#calidades">Ejercicio calidades</a></li>
			<li><a href="#login">Ejercicio Login</a></li>
			<li><a href="#mensajeria">Ejercicio mensajeria</a></li>
			<li><a href="#ejercicio_foro">Ejercicio foro</a></li>
			
</ol>

			</li>
			<li><a href="#context">Contexto</a></li>
			<li><a href="#upload_file">Upload file</a></li>
			<li><a href="#web_service">Web Services</a></li>

			</ol>
</article>
</section>

<main class="curso">
<?= drawH1WithImg() ?>

<article><div>
<h2>Modelo 1</h2>
<p>Se usaban Servlets, JSP y custom Tags, pero sin utilizar una estructura bien definida.</p>
	</div></article>

<article><div>
	<h2 id="mvc">Modelo Vista Controlador (modelo 2)</h2>
<div class="row">
	<div class="col-lg-6">
	<ul>
		<li><span class="font-weight-bold">Vista</span>: Son las pantallas que interaccionan con el usuario (la interfaz del usuario) (html y jsp). Todo lo que tenga que ver con la vista se almacena en la carpeta WEB-CONTENT.</li>
		<li><span class="font-weight-bold">Controlador</span>: Recibe las peticiones de la vista y se la manda al modelo (servlets).</li>
		<li><span class="font-weight-bold">Modelo</span>: Es la parte que se comunica con el servidor (consulta la base de datos, manda un correo, etc.)Son ficheros Java o EJB. En él, no debe haber ninguna referencia al protocolo http, ni request, ni response, ni session, etc.</li>
	</ul>
	</div>
	<div class="col-lg-6">
	<img class="img-fluid" src="img/mvc.jpg" alt="ejemplo del flujo de vida de una aplicación que implementa el paradigma del modelo-vista-controlador">

	</div>
</div>

	
</div></article>
<article><div>
	<h2>Cuando un proyecto comienza a crecer...</h2>
	<p>El modelo se almacena en un proyecto java común, y la vista en un proyecto web.</p>
</div></article>
<article><div>
	<h2>Saludar con MVC</h2>

<pre><span class="font-weight-bold">entrada.jsp</span><code>&lt;form action=&quot;ControllerServlet&quot;&gt;
	&lt;input type=&quot;text&quot; name=&quot;nombre&quot;&gt;	
	&lt;input type=&quot;submit&quot;&gt;
&lt;/form&gt;</code></pre>

<pre><span class="font-weight-bold">ControllerServlet.java</span><code>protected void doPost(HttpServletRequest, HttpServletResponse) throws ServletException, IOException{
	String resultado = Servicio.saludar(request.getParameter(&quot;nombre&quot;));
	request.setAttribute(&quot;resultado&quot;, resultado);
	request.getRequestDispatcher(&quot;salida.jsp&quot;).forward(request, response);
}</code></pre>

<div class="row">
	<div class="col-md-6">
	<pre><span class="font-weight-bold">Servicio</span><code>public class Servicio{
	public static String saludar(String nombre){
		return "hola" + nombre;
	}
}</code></pre>

	</div>
	<div class="col-md-6">
	<pre><span class="font-weight-bold">salida.jsp</span><code>&lt;%= request.getAttribute(&quot;resultado&quot;) %&gt;</code></pre>

	</div>
</div>

</div></article>

<article><div>
	<h2>Ejercicio calculadora</h2>

<div class="row">
	<div class="col-md-6">	<p>Hacer una calculadora siguiendo el patrón MVC. Si el resultado es mayor que 1000, el controlador redirigirá a una página diferente en la que se felicitará al usuario.</p></div>
	<div class="col-md-6"><img class="img-fluid" src="img/calculadora.svg" alt="ejemplo de como debería quedar el ejercicio de la calculadora con Java"></div>
</div>


	
</div></article>


</section>
<section>
	<article><div>
		<h2>Solventando problemas de codificación</h2>

		<h3>Configuraremos el cliente para recibir y enviar la información en UTF-8.</h3>
		<pre><code>&lt;%@ page language=&quot;java&quot; contentType=&quot;text/html; charset=utf-8&quot;%&gt;

&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot;&gt;</code></pre>

		<h3>Definiendo la codificación de todas las peticiones</h3>
		<p>Cuando se envía la petición por POST, el servidor TOMCAT no es capaz de saber cuál es el formato de codificación del cliente. Como posible solución está crear un filtro para que todas las peticiones pasen por él y dónde se especifique que sean en formato UTF-8.</p>
		<pre><span class="font-weight-bold">UTF8Filter.java</span><code>public class UTF8Filter implements Filter {
	private String encoding;
	//Recogemos el tipo de codificaci&oacute;n definido en el web.xml
	public void init( FilterConfig filterConfig ) throws ServletException {
		encoding = filterConfig.getInitParameter( &quot;requestEncoding&quot; );
	}
	// Metemos en la request el formato de codificacion UTF-8
	public void doFilter( ServletRequest request, ServletResponse response, FilterChain fc )throws IOException, ServletException {
		request.setCharacterEncoding( encoding );
		fc.doFilter( request, response );
	}
	public void destroy() {}
}</code></pre>

<pre><span class="font-weight-bold">web.xml</span><code>
&#x2026;
&lt;filter&gt;
	&lt;filter-name&gt;UTF8Filter&lt;/filter-name&gt;
	&lt;filter-class&gt;com.pablomonteserin.filter.UTF8Filter&lt;/filter-class&gt;
          &lt;init-param&gt;
		&lt;param-name&gt;requestEncoding&lt;/param-name&gt;
		&lt;param-value&gt;UTF-8&lt;/param-value&gt;
	&lt;/init-param&gt;
&lt;/filter&gt;
&lt;filter-mapping&gt;
	&lt;filter-name&gt;UTF8Filter&lt;/filter-name&gt;
	&lt;url-pattern&gt;/*&lt;/url-pattern&gt;
&lt;/filter-mapping&gt;</code></pre>

	<h3>Configurando el servidor para trabajar con UTF8</h3>
	<p>En Tomcat por defecto se especifica el formato de codificación ISO-8859-1. Para cambiar la codificación tenemos que modificar el archivo server.xml que se encuentra en:</p>
		 <pre><code>DIRECTORIO_INSTALACION_TOMCAT\conf\server.xml</code></pre>	
	<p>Añadimos el atributo URIEncoding=“UTF-8” en la etiqueta &lt;Connector port=&quot;8080&quot; &#x2026; /&gt; </p>
<pre><code>&lt;Connector port=&quot;8080&quot; maxHttpHeaderSize=&quot;8192&quot; maxThreads=&quot;150&quot; minSpareThreads=&quot;25&quot;     maxSpareThreads=&quot;75&quot; enableLookups=&quot;false&quot; redirectPort=&quot;8443&quot; acceptCount=&quot;100&quot;     connectionTimeout=&quot;20000&quot; disableUploadTimeout=&quot;true&quot; URIEncoding=&quot;UTF-8&quot;/&gt;</code></pre>

</div></article>

<article><div>
	<h2>Modelo 5 capas</h2>
	<span class="font-weight-bold">Vista</span>. <br>
La apariencia de la página. Son los .jsp, .html, .xhtml, etc. <br>
→ 
<span class="font-weight-bold">Controlador. </span> <br>
Recoge la información de la vista y se la manda al BO. <br>
→ <br>
<span class="font-weight-bold">BO. </span> <br>
Contiene las llamadas a cada una de las pequeñas operaciones independientes que componen la operación que queremos realizar. En el caso de estar realizando operaciones contra una base de datos, el el BO abrimos y cerramos  la conexión con la base de datos. Llama al DAO. <br>
→ <br>
<span class="font-weight-bold">DAO</span> <br>
En él haces operaciones contra sistemas ajenos a nuestra aplicación (una base de datos, un web service, etc.). También se le llama capa de integración. <br>
Son las clases 'tontas'. Contienen métodos nucleares que realizan operaciones concretas.  
<br>→<br>
<span class="font-weight-bold">Base de datos</span> <br>

<p>Según las recomendaciones de la JSR (Java Specification Request) y de la JCP (Java Comunity Proccess), si los casos de uso están bien definidos habrá un DAO por cada BO y un BO por cada Action.</p>


<h3>Recomendación: no usar métodos estáticos para llamar al BO y al DAO</h3>
	<p>Las variables definidas dentro de un método estático son compartidas por todos los hilos que llamen al método.</p>
	<p>Por tanto: <br/>
Si tenemos un método  estático consultarPaciente(int id), y dos usuarios distintos que simultáneamente llaman a este método, puede ocurrir lo siguiente: <br>

el primer usuario consulta para la id 4 y obtiene un paciente, pero antes de que llegue al return del método, llega el segundo usuario y consulta para la id 7, modificando la variable paciente que almacena el resultado de la consulta y que es común para ambos. Por tanto, el primer usuario, obtendrá el paciente que consulta el segundo.	</p>
<p>Ni las llamadas al BO, ni las llamadas al DAO deben ser hechas mediante métodos estáticos.</p>

</div></article>
<article><div>
	<h2 id="procesar_doget">Procesar toda la operativa en doGet o doPost</h2>
	<p>Desde el método doGet podemos llamar a: <br>

<span class="font-weight-bold">doPost(request,response);</span> <br> <br>

y desde el método doPost podemos llamar a: <br>

<span class="font-weight-bold">doGet(request,response);</span></p>
</div></article>
<article><div>
	<h2>Patrones de diseño → Singleton</h2>
	<p>Un patrón de diseño es una solución a un problema concreto en el desarrollo de software.</p>
	<p>Singleton para usar con JPA:</p>
<pre><span class="font-weight-bold">EntityManagerFactorySingleton</span><code>public class EntityManagerFactorySingleton {
	private static EntityManagerFactory emf;
	private EntityManagerFactorySingleton() {
		emf = Persistence.createEntityManagerFactory("TEST_PERSISTENCE_JPA");
	}
	
	public static EntityManagerFactory getInstance() {
		if(emf==null) {
			new EntityManagerFactorySingleton();
		}
		return emf;
	}	
}</code></pre>
</div></article>
<article><div>
	<h2 id="ctes">Definir constantes de aplicación en el web.xml</h2>
<div class="row">
	<div class="col-md-6">

	<pre><span class="bold">web.xml</span><code>&lt;context-param&gt;
	&lt;param-name&gt;foo&lt;/param-name&gt;
	&lt;param-value&gt;bar&lt;/param-value&gt;
&lt;/context-param&gt;</code></pre>
	</div>
	<div class="col-md-6">

	<pre><code>&lt;%=getServletContext().getInitParameter(&quot;foo&quot;) %&gt;
${initParam.foo}</code></pre>
	</div>
</div>

	

</div></article>
<article><div>
	<h2>Evitar una reinserción en la base de datos al refrescar la web</h2>
	<pre><code>if (session.getAttribute("recordInsertedSuccessfully") == null ){
	servicio.alta(libro);
	session.setAttribute("recordInsertedSuccessfully","true");
} else {
	session.setAttribute("recordInsertedSuccessfully",null);
}</code></pre>
</div></article>
<article><div>
	<h2>Proyecto con Maven</h2>

	<p>Creamos un proyecto Maven sin arquetipo <span class="i">(Create a simple project (skip archetype selection))</span> y editamos su <span class="i">pom.xml</span>.</p>


<p>Si es un proyecto con Eclipse...</p>

<ol>
	<div class="row">
	<li class="col-md-4">
	<p class="red bold">No te olvides de seleccionar el empaquetado war!</p>	
<img class="img-fluid" src="img/java-maven-project.png" alt="java maven project">
</li>
  
<li class="col-md-4">Debemos asegurarnos de que en <span class="i">Project facets</span> tenemos marcado Dynamic Web module y Java. Para acceder a las <span class="i">Project facets</span>, pulsaremos con el botón derecho sobre el proyecto ⟶ Properties ⟶ Project Facets. <br><img src="img/project-facets.png" alt="project java facets">
</li>
<li class="col-md-4">Debemos asegurarnos de que existe una carpeta <span class="i">webapp</span>, en la raíz de nuestro proyecto, donde meteremos las vistas: <br><img src="img/ubicacion-vistas-java-maven.png" alt="estructura proyecto Maven">
</li>


</div>
<li >

<div class="row">
<div class="col-lg-4">
<p>Debemos asegurarnos de que nuestro proyecto tiene añadidas las librerías de Maven en tiempo de ejecución. Para comprobarlo ⟶  botón derecho sobre el proyecto ⟶ properties ⟶ Deployment Assembly: </p>

<img src="img/librerias-maven-tiempo-ejecucion.png" alt="librerias maven">
</div>

<div class="col-lg-4">
	<p>Si no las tuviesemos, pulsaríamos en Add ⟶ Java Build Path Entries ⟶ Maven Dependencies</p>
<img src="img/java-build-path-entries.png" alt="java build path entries">
</div>
<div class="col-lg-4">
	<p>
<img src="img/eclipse-maven-dependencies.png" alt="Eclipse Maven Dependencies">
</p>
</div>
</div>

</li>

<li>

<div class="row">
	<div class="col-lg-4">

	<p>Debemos asegurarnos de que nuestro proyecto tiene ubicada correctamente la carpeta <span class="i">webapps</span>, o de lo contrario no podremos ejecutar <span class="i">Run as -> Run on server</span></p>
	<img src="img/web-deployment-assembly-webapp.png" alt="web deployment assembly webapp">

	</div>

	<div class="col-lg-4">
	<p>Si la ruta <span class="i">/src/main/webapp</span> no existiese, tendríamos que crearla pulsando en <span class="i">Add</span>.</p>

	<img src="img/web-deployment-assembly-folder.png" alt="web deployment-assembly-folder">
	</div>

	<div class="col-lg-4">

	<p>
	<img src="img/anadir-webapp-a-proyecto-web.png" alt="Añadir webcontent a proyecto web">


	</p>
	</div>
</div>
</li>
</ol>

	<pre><span class="bold">pom.xml</span><code>&lt;project xmlns=&quot;http://maven.apache.org/POM/4.0.0&quot; xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot; xsi:schemaLocation=&quot;http://maven.apache.org/POM/4.0.0 http://maven.apache.org/xsd/maven-4.0.0.xsd&quot;&gt;
  &lt;modelVersion&gt;4.0.0&lt;/modelVersion&gt;
  &lt;groupId&gt;com.pablomonteserin&lt;/groupId&gt;
  &lt;artifactId&gt;calidades-futbol-jpa&lt;/artifactId&gt;
  &lt;version&gt;0.0.1-SNAPSHOT&lt;/version&gt;
  &lt;packaging&gt;war&lt;/packaging&gt;
  
  	&lt;properties&gt;
		&lt;hibernate.version&gt;5.4.2.Final&lt;/hibernate.version&gt;
		&lt;spring.version&gt;5.1.7.RELEASE&lt;/spring.version&gt;
		&lt;jstl.version&gt;1.2&lt;/jstl.version&gt;
		&lt;servletapi.version&gt;4.0.1&lt;/servletapi.version&gt;
	&lt;/properties&gt;
	
	&lt;dependencies&gt;
			&lt;dependency&gt;
			&lt;groupId&gt;junit&lt;/groupId&gt;
			&lt;artifactId&gt;junit&lt;/artifactId&gt;
			&lt;version&gt;3.8.1&lt;/version&gt;
			&lt;scope&gt;test&lt;/scope&gt;
		&lt;/dependency&gt;
		&lt;dependency&gt;
			&lt;groupId&gt;org.hibernate&lt;/groupId&gt;
			&lt;artifactId&gt;hibernate-core&lt;/artifactId&gt;
			&lt;version&gt;${hibernate.version}&lt;/version&gt;
		&lt;/dependency&gt;

		&lt;!-- Entity manager which is required for JPA --&gt;
		&lt;dependency&gt;
			&lt;groupId&gt;org.hibernate&lt;/groupId&gt;
			&lt;artifactId&gt;hibernate-entitymanager&lt;/artifactId&gt;
			&lt;version&gt;${hibernate.version}&lt;/version&gt;
		&lt;/dependency&gt;
		&lt;dependency&gt;
			&lt;groupId&gt;mysql&lt;/groupId&gt;
			&lt;artifactId&gt;mysql-connector-java&lt;/artifactId&gt;
			&lt;version&gt;8.0.16&lt;/version&gt;
		&lt;/dependency&gt;
		&lt;dependency&gt;
			&lt;groupId&gt;javax.servlet&lt;/groupId&gt;
			&lt;artifactId&gt;javax.servlet-api&lt;/artifactId&gt;
			&lt;version&gt;3.0.1&lt;/version&gt;
			&lt;scope&gt;provided&lt;/scope&gt;
		&lt;/dependency&gt;
		&lt;dependency&gt;
			&lt;groupId&gt;javax.servlet&lt;/groupId&gt;
			&lt;artifactId&gt;jsp-api&lt;/artifactId&gt;
			&lt;version&gt;2.0&lt;/version&gt;
			&lt;scope&gt;provided&lt;/scope&gt;
		&lt;/dependency&gt;
		&lt;!-- https://mvnrepository.com/artifact/javax.servlet.jsp.jstl/jstl-api --&gt;
		&lt;dependency&gt;
			&lt;groupId&gt;jstl&lt;/groupId&gt;
			&lt;artifactId&gt;jstl&lt;/artifactId&gt;
			&lt;version&gt;1.2&lt;/version&gt;
		&lt;/dependency&gt;
	&lt;/dependencies&gt;
	
	&lt;build&gt;
		&lt;plugins&gt;		
			&lt;plugin&gt;
				&lt;groupId&gt;org.apache.maven.plugins&lt;/groupId&gt;
				&lt;artifactId&gt;maven-war-plugin&lt;/artifactId&gt;
				&lt;version&gt;2.6&lt;/version&gt;
				&lt;configuration&gt;
					&lt;failOnMissingWebXml&gt;false&lt;/failOnMissingWebXml&gt;
				&lt;/configuration&gt;
			&lt;/plugin&gt;
		&lt;/plugins&gt;
	&lt;/build&gt;
	
&lt;/project&gt;</code></pre>

<pre><span class="bold">src/main/resources/META-INF/persistence.xml</span><br>(habrá que crear la carpeta META-INF)<code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
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
</div></article>
<article><div>
	<h2 id="ejercicios_mvc">Ejercicios MVC</h2>

	<h3 id="lista_invitados">Ejercicio - Lista de invitados</h3>
	<p>Hacer una página web para una lista de invitados con 4 secciones. Una para consultar los invitados, otra para dar de alta un nuevo invitado y otra para darlo de baja.La tabla que usaremos tendrá dos campos: nombre (VARCHAR) e ID (INT, AUTOINCREMENT, PK).</p>
	<p>Las operaciones de modificación en la base de datos se harán en una clase llamada <span class="i">Servicio</span>.</p>
	<p>Cada uno de los siguientes pantallazos representa una página jsp diferente.</p>
	
	<div class="row">
		<div class="col-md-10">	<img class="img-fluid" src="img/invitados.svg" alt="lista invitados"></div>
		<div class="col-md-2"><div class="centraditos">
	<?= getRes("ejemplo","zip/invitado.zip", "Descargar ejercicio invitados con Hibernate") ?>
	<?= getRes("ejemplo","zip/lista-invitados-jpa.zip", "Descargar ejercicio invitados con JPA") ?>
</div></div>
	</div>




	<h3 id="ejercicio_futbol">Ejercicio fútbol</h3>
	
	<p>La segunda carga una collection de beans de Equipo, y la tercera carga una collection de beans de Jugador en función de un parámetro (EQUIPO_COD) que fue procesado en el controlador.</p>
<div class="centraditos">
<?= getRes("recurso","zip/futbol.sql", "Descargar base de datos") ?>
<?= getRes("recurso","zip/imagenes-futbol.zip", "Descargar imágenes") ?>
<?= getRes("recurso","zip/entity.zip", "Entidades para usar en Hibernate") ?>


</div>
<img class="img-fluid" src="img/futbol.svg" alt="Pantallazo ejercicio resuelto">
<div class="centraditos">
<?= getRes("recurso","zip/futbol.zip", "Descargar ejercicio futbol con Hibernate") ?>
<?= getRes("recurso","zip/futbol-jpa.zip", "Descargar ejercicio futbol con JPA") ?>

</div>

	<h3 id="trabajo_fechas">Trabajo con fechas</h3>


	<div class="row">
		<div class="col-md-6"><pre><span class="font-weight-bold">Paso de String a Date:</span><code>SimpleDateFormat s = new SimpleDateFormat(&quot;dd-MM-yyyy&quot;);
Date fecha = s.parse(&quot;10-12-1982&quot;);</code></pre></div>
		<div class="col-md-6"><pre><span class="font-weight-bold">Paso de Date a String:</span><code>SimpleDateFormat s = new SimpleDateFormat(&quot;dd-MM-yyyy&quot;); 
String fechaAlta = s.format(fecha); <span class="green">//fecha es un objeto de tipo Date</span></code></pre></div>
	</div>



<div class="row">
	<div class="col-md-6"><pre><span class="font-weight-bold">Paso de Date a GregorianCalendar:</span><code>GregorianCalendar gc = new GregorianCalendar();
gc.setTime(fecha); //fecha es un objeto de tipo Date
String dia = gc.get(GregorianCalendar.DAY_OF_MONTH);
String mes = gc.get(GregorianCalendar.MONTH)+1;
String anio = gc.get(GregorianCalendar.YEAR);</code></pre></div>
	<div class="col-md-6"><pre><span class="font-weight-bold">Construcción de un objeto GregorianCalendar</span><br> a partir del día, mes y año por separado<code>new GregorianCalendar(int year, int month, int dayOfMonth</code></pre></div>
</div>



	
	<div class="notas">
<span class="font-weight-bold">Nota:</span> <br>
Para pasar de String a GregorianCalendar hay que pasar previamente de String a Date.
</div>
	
<div class="row">
	<div class="col-md-6"><pre><span class="font-weight-bold">Descomposición de una fecha en formato String:</span><code>String fecha = "24-07-1982";
String [] fechaSplitada = fecha.split("-");
String dia = fechaSplitada[0];
String mes = fechaSplitada[1];
String anio = fechaSplitada[2];</code></pre></div>
	<div class="col-md-6">	<pre><span class="font-weight-bold">Etiqueta JSTL para formato de fechas</span><code>&lt;%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt" %&gt;

&lt;fmt:formatDate pattern="dd-MM-yyyy" value="${fecha_java_util_Date}" /&gt;

&lt;fmt:formatDate pattern="dd" value="${fecha_java_util_Date}" /&gt;</code></pre></div>
</div>




	


	<h3 id="input_type_hidden">input type hidden</h3>
	<p>Una etiqueta &lt;input type=&quot;hidden&quot; /&gt; nos permite enviar información en un formulario sin que dicha información aparezca en la vista.</p>

<h3 id="hospital_I">Hospital</h3>
	<h4>Hospital I</h4>
	<p>La base de datos tendrá 4 campos: id(PRIMARY KEY, AUTOINCREMENT), nombre (VARCHAR), apellidos (VARCHAR), fecha_alta(DATE).</p>


<pre><span class="bold">Para convertir una fecha en un objeto de tipo Date:</span><code>SimpleDateFormat formatter = new SimpleDateFormat("dd-<span class="purple">MM</span>-yyyy");
Date fecha = formatter.parse(stringFecha);

<span class="purple">//MM mayúscula, las minúsculas son para minutos.</span></code></pre>
Estas conversiones las haremos en el controlador (No modificaremos el bean paciente para añadirle las propiedades día, mes y año)
<p>Para modificar la fecha primero convierto el tipo de dato recibido del formulario a un dato de tipo <span class="red">java.util.Date.</span></p>
<p>Luego, cuando le pase parámetros a la consulta sql convertiré esta fecha un dato de tipo java.sql.Date:</p>
<pre><code>pstmt.setDate(3,new java.sql.Date(<span class="red">fecha</span>.getTime()));</code></pre>


<div class="row">
	<div class="col-md-10"><img class="img-fluid" src="img/hospitalI.svg" alt="pantallazo ejercicio hospital I"></div>
	<div class="col-md-2"><div class="centradios">
<?= getRes('recurso','zip/hospital.zip', 'Descargar ejercicio hospital') ?>
<?= getRes('recurso','zip/hospital-jpa.zip', 'Descargar ejercicio hospital con JPA') ?>
</div>
</div>
</div>



	<h4>Hospital II</h4>

<div class="row">
	<div class="col-md-7">	<p>Necesitamos que el formulario de modificación haga dos cosas: actualice la base de datos y elimine el registro que hemos seleccionado. Para ello deberemos añadir un botón de eliminar, así como el siguiente código Javascript</p></div>
	<div class="col-md-5"><pre><code>&lt;script type=&quot;text/javascript&quot;&gt;
function cambiarAction(){
        document.getElementById(&quot;action&quot;).value=&quot;actualizaCampos&quot;;
        document.getElementById(&quot;formulario&quot;).submit();
}
&lt;/script&gt;</code></pre></div>
</div>


	

<h3 id="listado_libros">Ejercicio listado libros</h3>

<?= getRes('recurso','zip/libreria.zip', 'Descargar ejercicio librería') ?>
	<h4>Ejercicio listado libros I</h4>
	<img src="img/listado_libros_1.svg" alt="Pantallazo ejercicio listado libros 1">

	<h4>Ejercicio listado libros II</h4>
	<img src="img/listado-libros-2.svg" alt="pantallazo listado libros">

	<p><span class="font-weight-bold">Nota:</span> <br>
	Pasarle parámetros al action de un formulario directamente en su URL funciona sólo si estamos enviando la información por POST. En caso contrario, la URL que definimos en el action y la que generamos dinámicamente entran en conflicto y los parámetros definidos explícitamente en el action del formulario no son enviados.</p>
<pre><code>&lt;form method=&quot;post&quot; action=&quot;ServletController?action=alta&quot;&gt;</code></pre>
	
<p><span class="font-weight-bold">Para programar la opción de agregar un nuevo registro, tenemos dos opciones:</span> </p>
<ul>
	<li>Podemos hacer un formulario que abarque sólo las celdas de la fila dónde se encuentra el botón de agregar (esta es la opción más sencilla, pero desde el punto de vista de la validación del código html sería incorrecta).</li>
	<li>Podemos hacer un formulario que abarque toda la tabla html donde se están mostrando los resultados de la consulta (esta opción es un poco más compleja, pero el código html validaría correctamente).</li>
</ul>



	<h4>Ejercicio listado libros III</h4>
<img src="img/listado-libros-2.svg" alt="Pantallazo ejercicio listado libros">
	<p>Lo más sencillo será utilizar un formulario para cada fila, de tal forma que abarque todas las celdas de cada registro.Esta opción no valida el código html. </p>

	<h4>Ejercicio listado libros IV</h4>
	<img src="img/listado-libros-4.svg" alt="Pantallazo ejercicio listado libros 4">

<div class="row">
	<div class="col-md-10"><p>Podemos usar la siguiente función:</p>
<pre><code>function modificar(id){
	document.getElementById("action").value = "modificar";
	document.getElementById("idEnviada").value = id;
	document.getElementById("modifica_titulo").value = document.getElementById("titulo_"+id).value;
	document.getElementById("modifica_precio").value = document.getElementById("precio_"+id).value;
	document.getElementById("formulario").submit();
}</code></pre>



<input type="button" onclick="verPista(1)" value="Ver pista">
<pre id="pista1" class="pista"><code>&lt;form id=&quot;formulario&quot;&gt;
	&lt;table&gt;
		&lt;tr&gt;
			&lt;td&gt;${libro.id}&lt;/td&gt;
			&lt;td&gt;&lt;input type=&quot;text&quot; value=&quot;fulanito&quot;  id=&quot;nombrecampo${libro.id}&quot;&gt;&lt;/td&gt;
			&lt;td&gt;&lt;input type=&quot;button&quot; value=&quot;enviar&quot; onclick=&quot;modificar(${libro.id})&quot;&gt;&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;2&lt;/td&gt;
			&lt;td&gt;&lt;input type=&quot;text&quot; value=&quot;menganito&quot; id=&quot;nombrecampo2&quot;&gt;&lt;/td&gt;
			&lt;td&gt;&lt;input type=&quot;button&quot; value=&quot;enviar&quot; onclick=&quot;modificar(2)&quot;&gt;&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/table&gt;
	&lt;input type=&quot;hidden&quot; name=&quot;id_libro&quot; id=&quot;id_libro&quot;&gt;
	&lt;input type=&quot;hidden&quot; name=&quot;nombre&quot; id=&quot;nombre&quot;&gt;
&lt;/form&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
	function modificar(id_libro){
		alert(id_libro)
		document.getElementById(&quot;id_libro&quot;).value=id_libro;
		var nombreAModificar = document.getElementById(&quot;nombrecampo&quot;+id_libro).value;
		document.getElementById(&quot;nombre&quot;).value=nombreAModificar;
		document.getElementById(&quot;formulario&quot;).submit();
	}
&lt;/script&gt;</code></pre></div>
	<div class="col-md-2"><?= getRes('recurso','zip/listado-libros-jpa.zip', 'Descargar ejercicio listado libros con JPA') ?></div>
</div>





	<h3 id="calidades">Ejercicio calidades</h3>
	<img src="img/calidades-jugadores.svg" alt="Pantallazo listado jugadores">
	<p>Para que las capas amarillas contenidas en la tabla aparezcan alineadas con la parte baja de la misma usaremos el siguiente estilo:
&lt;td style='vertical-align:bottom'&gt;
</p>
<p>Como utilizando JSTL y un solo bucle es posible generar la tabla de jugadores de la izquierda y la tabla de calidades de la derecha.</p>
<pre><code>&lt;c:forEach var=&quot;jugador&quot; items=&quot;${requestScope.jugadores}&quot;&gt;
	&lt;tr&gt;&lt;td&gt;&lt;c:out value=&quot;${jugador.numero_camiseta}&quot; /&gt;&lt;/td&gt;&lt;td&gt;&lt;c:out value=&quot;${jugador.nombre}&quot; /&gt;&lt;/td&gt;&lt;/tr&gt;
	&lt;c:set var=&quot;fsup&quot;&gt;
		${fsup}&lt;td style=&quot;vertical-align:bottom;&quot;&gt;
		&lt;div style=&quot;background-color:yellow; width:20px; height:&lt;c:out value=&quot;${jugador.calidad*30}&quot; /&gt;px&quot;&gt;&lt;/div&gt;&lt;/td&gt;		
	&lt;/c:set&gt;
	&lt;c:set var=&quot;finf&quot;&gt;
		${finf}&lt;td&gt;&lt;c:out value=&quot;${jugador.numero_camiseta}&quot; /&gt;&lt;/td&gt;
	&lt;/c:set&gt;	
&lt;/c:forEach&gt;</code></pre>


	

	<h3 id="login">Ejercicio Login</h3>

<div class="row">
	<div class="col-md-3">	
	<p>Si el usuario se loguea con éxito, colocamos un bean del usuario logueado en la sesión. Y redirigimos a la página de ''usuario logueado'. En caso contrario, redirigimos a la página de''se ha producido un error''.</p>
<?= getRes('recurso','zip/login-jpa.zip', 'Descargar ejercicio') ?></div>
	<div class="col-md-9"><img class="img-fluid" src="img/login.svg" alt="login"></div>
</div>



	<h3 id="mensajeria">Ejercicio Mensajería</h3>
	<img style="width:100%" src="img/mensajeria.svg" alt="ejercicio mensajería">


	<pre><code>@Entity
public class Usuario {
	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)//Para generar n&uacute;meros autoincrementados
	private int id;
	private String nombre;
	private String pass;
	//Siempre que tengamos una relaci&oacute;n OneToMany, usaremos el mappedBy
	@OneToMany(mappedBy = &quot;remitente&quot;)
	private List &lt;Mensaje&gt; mensajesEnviados;
	@OneToMany(mappedBy = &quot;destinatario&quot;)
	private List &lt;Mensaje&gt; mensajesRecibidos;</code></pre>

	<pre><code>@Entity
public class Mensaje {
	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)//Para generar n&uacute;meros autoincrementados
	private int id;
	@ManyToOne
	private Usuario remitente;
	@ManyToOne
	private Usuario destinatario;
	private String mensaje;</code></pre>


	<div class="row">
		<div class="col-md-10">	<table class="border" style="display:inline-block">
		<tr>
			<th colspan="4">mensaje</th>
		</tr>
		<tr>
			<th>id</th>
			<th>remitente</th>
			<th>destinatario</th>
			<th>mensaje</th>
		</tr>
		<tr>
			<td>1</td>
			<td>1</td>
			<td>1</td>
			<td>Hola!</td>
		</tr>
		<tr>
			<td>2</td>
			<td>1</td>
			<td>2</td>
			<td>Qué pasa tron!</td>
		</tr>
		<tr>
			<td>3</td>
			<td>1</td>
			<td>1</td>
			<td>Hola Caracola</td>
		</tr>
		<tr>
			<td>4</td>
			<td>1</td>
			<td>2</td>
			<td>Te odio</td>
		</tr>
	</table>
	<table class="border" style="display:inline-block">
		<tr>
			<th colspan="3">usuario</th>
		</tr>
		<tr>
			<th>id</th>
			<th>nombre</th>
			<th>pass</th>
		</tr>
		<tr>
			<td>1</td>
			<td>pp</td>
			<td>kk</td>
		</tr>
		<tr>
			<td>2</td>
			<td>kk</td>
			<td>kk</td>
		</tr>
	</table>
	<pre><code>&lt;input type=&quot;checkbox&quot; name=&quot;arrayDeUsuarios&quot; value=&quot;&lt;c:out value=&quot;${usuario.id}&quot;/&gt;&quot;/&gt;
String[] arrayDeUsuarios = request.getParameterValues(&quot;arrayDeUsuarios&quot;);</code></pre></div>
		<div class="col-md-2"><?= getRes('recurso','zip/mensajeria-jpa.zip', 'Descargar ejercicio mensajería') ?></div>
	</div>




	<h3 id="ejercicio_foro">Ejercicio foro</h3>
		<img style="width:100%" src="img/foro.svg" alt="ejercicio foro">

	<table class="border" style="display:inline-block">
		<tr>
			<th colspan="3">usuario</th>
		</tr>
		<tr>
			<th>id</th>
			<th>nombre</th>
			<th>pass</th>
		</tr>
		<tr>
			<td>1</td>
			<td>pp</td>
			<td>pp</td>
		</tr>
		<tr>
			<td>2</td>
			<td>kk</td>
			<td>kk</td>
		</tr>
	</table>


	<div class="row">
		<div class="col-md-8">

		<div class="table-responsive">
	<table class="border" style="display:inline-block">
		<tr>
			<th colspan="4">comentario</th>
		</tr>
		<tr>
			<th>id</th>
			<th>id_usuario</th>
			<th>id_hilo</th>
			<th>comentario</th>
		</tr>
		<tr>
			<td>1</td>
			<td>2</td>
			<td>7</td>
			<td>es super guay!</td>
		</tr>
		<tr>
			<td>2</td>
			<td>2</td>
			<td>8</td>
			<td>En pablomonteserin.com los vendes muy buenos</td>
		</tr>
	</table>
	</div>

<div class="table-responsive">
	<table class="border" style="display:inline-block">
		<tr>
			<th colspan="4">hilo</th>
		</tr>
		<tr>
			<th>id</th>
			<th>id_usuario</th>
			<th>nombre_hilo</th>
			<th>texto_hilo</th>
		</tr>
		<tr>
			<td>7</td>
			<td>1</td>
			<td>Escoger ordenador</td>
			<td>Dónde comprar uno bueno</td>
		</tr>
		<tr>
			<td>8</td>
			<td>1</td>
			<td>¿Qué opinas de Ubuntu?</td>
			<td>Dudas sobre Ubuntu</td>
		</tr>
	</table>
	</div>
</div>
		<div class="col-md-2">	<?= getRes('recurso','zip/foro-jpa.zip', 'Descargar ejercicio jpa') ?></div>
	</div>

</div></article>
<article><div>
	<h2 id="context">Context</h2>
	
	<div class="row">
		<div class="col-md-6">	<p>Hay un solo Context por cada aplicación web que hay en el servidor.</p>
	<p>Lo que es propio de cada usuario va en sesión. Lo que es común a todos va en Context.</p>
	<p>En un carrito de compra, el carrito de cada usuario se almacenaría en una variable sesión, mientras que la lista de precios estaría en una variable Context.</p>
</div>
		<div class="col-md-6">	<h3>Variables de contexto</h3>
	

	<pre><span class="font-weight-bold">Acceder al contexto en el servlet:</span><code>ServletContext context = request.getSession().getServletContext();</code></pre>
	
	
	
	<pre><span class="font-weight-bold">Acceder al contexto en el listener:</span><code>ServletContext context = arg0.getServletContext();</code></pre>
	
	</div>
	</div>


</div></article>

<article><div>
	<h2>Serialización</h2>
	<p>Consiste en convertir un objeto en una sucesión de bits o en un formato humanamente más legible como XML o JSON, entre otros.</p>
	<p>La serialización es un mecanismo ampliamente usado para transportar objetos a través de una red, para hacer persistente un objeto en un archivo o base de datos, o para distribuir objetos idénticos a varias aplicaciones o localizaciones.</p>

<pre><span class="font-weight-bold">EscribirDatoMain</span><code>Persona p = new Persona();
SerializeObjecs.writeObject(p,"/home/monty/Documents/serializado.txt" )</code></pre>


<pre><span class="font-weight-bold">LeerDatoMain</span><code>Persona p = (Persona)SerializeObjects.readObject("/home/monty/Documents/serializado.txt")
</code></pre>
</div></article>

<article><div>
	<h2>Ejercicio suma sesión y contexto</h2>
<div class="row">
	<div class="col-md-10">	<p>Hacer un jsp con dos campos, n1 y n2. Al pulsar en el botón sumar, el controlador procesará: </p>
<ul>
	<li>la suma de request.</li>
	<li>la suma de sesión.</li>
	<li>la suma de contexto.</li>
</ul>
<p>Haremos todas las operaciones en el controlador.</p>
<p>Con un listener, cuando baje el servidor guardaré la información de la suma del contexto en un archivo de texto. Al subir el servidor se recupera la información del archivo de texto. </p></div>
	<div class="col-md-2"><div class="centraditos">
				<?= getRes("recurso","ex/SerializeObjects.java","Descargar SerializeObjects.java") ?>

<?= getRes("ejemplo","zip/suma_sesion.zip", "Descargar ejercicio suma sesión") ?>
</div></div>
</div>



</div></article>

<article><div>
	<h2>Ejercicio</h2>
	<p>Repetir el ejercicio de las calidades almacenando los equipos y los jugadores en el contexto. Almacenaré los equipos como un TreeMap y los jugadores como una Collection. Podré recuperar los jugadores de un equipo mediante un método getJugadores() de la clase Equipo. Dicho método devuelve una collection de jugadores.</p>
	<p>El código de la derecha es parte del código que irá en el ContextListener para almacenar los jugadores en el contexto.</p>
	<pre><code>ArrayList jugadores = new ArrayList();
ResultSet rsJugadores = stm.executeQuery(&quot;select * from jugador order by equipo_cod, numero_camiseta&quot;);
boolean haySiguienteRegistro=rsJugadores.next();
Integer equipo_cod_actual = 1;
Integer equipo_cod_siguiente = 1;
while(haySiguienteRegistro){
	Jugador jugador = new Jugador();
	equipo_cod_actual = rsJugadores.getInt(&quot;equipo_cod&quot;);		    			
	jugador.setEquipo_cod(equipo_cod_actual);
	jugador.setJugador_cod(rsJugadores.getString(&quot;jugador_cod&quot;));
	...
	jugadores.add(jugador);
	haySiguienteRegistro = rsJugadores.next();
	if(haySiguienteRegistro){
	equipo_cod_siguiente = rsJugadores.getInt(&quot;equipo_cod&quot;);		    			
	if(rsJugadores.getInt(&quot;equipo_cod&quot;) != equipo_cod_actual){
		equipos.get(equipo_cod_actual).setJugadores(jugadores);	
		jugadores = new ArrayList();
	}
	}else{
		equipos.get(equipo_cod_actual).setJugadores(jugadores);	
	}
}
ServletContext context = arg0.getServletContext();
context.setAttribute(&quot;equipos&quot;, equipos);</code></pre>
</div></article>
<article><div>
	<h2 id="upload_file">Upload file (subir fichero)</h2>
<pre><span class="bold">index.jsp</span><code>
&lt;%@ page language=&quot;java&quot; contentType=&quot;text/html; charset=ISO-8859-1&quot;
    pageEncoding=&quot;ISO-8859-1&quot;%&gt;
&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot; &quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;
&lt;html&gt;
&lt;head&gt;&lt;title&gt;Insert title here&lt;/title&gt;&lt;/head&gt;
&lt;body&gt;
<span class="red">&lt;form method=&quot;POST&quot; enctype='multipart/form-data' action=&quot;<span class="purple bold">ServletController</span>&quot;&gt;
 Por favor, seleccione el trayecto del fichero a cargar&lt;br/&gt;
&lt;input type=&quot;file&quot; name=&quot;<span class="blue bold">fichero</span>&quot;&gt;
&lt;input type=&quot;submit&quot;&gt;
&lt;/form&gt; </span>
&lt;/body&gt;
&lt;/html&gt;

<span class="bold">ServletController.java</span>
public boolean procesaFicheros(HttpServletRequest req) {
try {
	DiskFileUpload fu = new DiskFileUpload();<span class="green">// construimos el objeto que es capaz de parsear la pericion</span>
	fu.setSizeMax(1024*512); <span class="green">// m&aacute;ximo numero de bytes (512)</span>
	fu.setSizeThreshold(4096);<span class="green">// tama&ntilde;o por encima del cual los ficheros son escritos directamente en disco</span>
	fu.setRepositoryPath(&quot;/tmp&quot;);<span class="green">// directorio en el que se escribir&aacute;n los ficheros con tama&ntilde;o superior al soportado en memoria</span>
	List <span class="blue bold">fileItems</span> = fu.parseRequest(req);<span class="green">// ordenamos procesar los ficheros</span>
	if(fileItems == null) {
		System.out.println(&quot;La lista es nula&quot;);
		return false;
	}
	Iterator i = fileItems.iterator();<span class="green">// Iteramos por cada fichero</span>
	FileItem actual = null;
	while (i.hasNext()){
		actual = (FileItem)i.next();
		String fileName = actual.getName();
		File fichero = new File(fileName);// construimos un objeto file para recuperar el trayecto completo
		System.out.println(&quot;El nombre del fichero es &quot; + fichero.getName());// nos quedamos solo con el nombre y descartamos el path
		fichero = new  File(&quot;/home/monty/Desktop/&quot;+fichero.getName());// escribimos el fichero colgando del nuevo path
		actual.write(fichero);
	}
}catch(Exception e) {
	System.out.println(&quot;Error de Aplicaci&oacute;n &quot; + e.getMessage());
	return false;
}
return true;
}</code></pre>
</div></article>
<article><div>
	<h2 id="web_service">Web Service</h2>
	<ol>
		<li>
			Creamos un Dynamic Web Proyect webService_llamado.
		</li>
		<li>
			Creamos un paquete dentro del proyecto.
		</li>
		<li>
			Creamos una clase llamada ClaseLlamada (llámala cómo quieras, pero no igual que el método) dentro de este proyecto con el siguiente método estático, que recibe un parámetro y devuelve el parámetro transformado.
			<pre>
				<code>
		public static String saludar(Strin parametro){
			return "Hola " + parametro;
		}
				</code>
			</pre>
		</li>
		<li>
			Para dar este paso es posible que sea necesario que el servidor esté arrancado, ya que a veces no se arranca automáticamente. Botón derecho sobre la clase recién creada → Web Service → Create Web Service → next → elijo los métodos que quiero publicar como web service(deberían ser métodos que devolviesen algo) → finish
		</li>
		<li>
			Creo un nuevo dynamic web proyect llamador.
		</li>
		<li>
			Creo un paquete dentro del src.
		</li>
		<li>Botón derecho sobre el paquete recién creado → new → web service client → browse → busco el fichero wsdl (webcontent/wsdl/saludar.wsdl) creado en el proyecto anterior → finish</li>
		<li>Creo una clase Main desde la que llamo al método que contiene la clase
<pre><code>
public static void(String [] args){
	ClaseLlamadaProxy claseLlamadaProxy = new ClaseLlamadaProxy();
	try{
		System.out.println(claseLlamadaProxy.saludar("Juan"));
	}catch(Remote Exception){
		e.printStackTrace();
	}
}</code></pre>
		</li>
	</ol>
	<div class="notas">
		<span class="bold black">Notas:</span> <br> El proyecto llamado debe estar desplegado en el servidor cuando lo llamemos.
	</div>
</div></article>
</main>
<?php 
});
include $path."/diapos_theme/footer.php";
?>