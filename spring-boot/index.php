<?php 
$titulo_curso="Spring Boot";
$meta_description = 'SpringBoot es el framework de Java más extendido en la actualidad para desarrollar aplicaciones web';
$img_curso = 'curso-spring.svg';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";
include $path."diapos_theme/head.php";

add_action( 'genesis_after_header', function(){
	global $dots;
?>

<section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">
	<ol>
		<li><a href="#instalacion">Instalación</a></li>
<li><a href="#proyectoalta">Proyecto Alta</a></li>
<li><a href="#cargarjstl">Cargar JSTL</a></li>
<li><a href="#enrutamientoautomatico">Enrutamiento Automático</a></li>

<li><a href="#ejerciciosspringboot">Ejercicios Spring Boot</a></li>
<li><a href="#peticion-rest">Petición rest</a></li>
			</ol>
</article>
</section>

<main class="curso">

<?= drawH1WithImg() ?>



<article><div>
	<h3 id="instalacion">Instalación</h3>

	<ol>
		<li><a href="https://spring.io/tools" target="_blank">Instalamos <span class="i">Spring tools</span></a></li>
		<li><a href="https://start.spring.io/" target="_blank">start.spring.io</a>
			<ul>
				<li><span class="bold">group</span> (nombre del paquete): com.pablomonteserin.prueba</li>
				<li><span class="bold">artifact</span> (nombre del proyecto): PruebaPersistencia</li>

				<li><span class="bold">Dependencies</span>:
					<ul>
						<li>Web</li>
						<li>JPA</li>
						<li>MySQL</li>
						<li>(Más adelante está explicado como cargar JSTL)</li>
					</ul>
				</li>
			</ul>
		</li>
		<li>Descargamos y descomprimimos el fichero</li>
		<li>Eclipse -> Import -> Existing Maven Project</li>
		<li>Botón derecho sobre el <span class="i">pom.xml</span> Run as -> Run configurations
			<ul>
				<li><span class="bold">Name</span>: Lo que quieras</li>
				<li><span class="bold">Goals</span>: clean install (limpia la carpeta target con los ficheros que se han ido compilando e instala las dependencias descritas el <span class="i">pom.xml</span>)</li>
			</ul>
		</li>
	</ol>

	<h4>Configuración para usar base de datos</h4>


<div class="row">
	<div class="col-md-10">	<p>Si hemos seleccionado con <span class="i">start.spring.io</span> un proyecto que usa JPA y no configuramos la conexión, el proyecto no arrancará.</p>


<pre><code>@Configuration
@EnableTransactionManagement
public class PruebaPersistenceConfiguration {

@Bean
public DataSource dataSource(){
	DriverManagerDataSource dataSource = new DriverManagerDataSource();
	dataSource.setDriverClassName("com.mysql.cj.jdbc.Driver");
	dataSource.setUrl("jdbc:mysql://localhost:3306/libro?serverTimezone=UTC");
	dataSource.setUsername( "pm" );
	dataSource.setPassword( "pp" );
	return dataSource;
}
}</code></pre></div>
	<div class="col-md-2"><?= getRes('recurso','zip/springboot-con-bd.zip', 'Descargar recurso') ?></div>
</div>




</div></article>


<article><div>
	
	<h3 id="proyectoalta">Proyecto Prueba</h3>
	
	<div class="row">
		<div class="col-md-3">
	<h4>Vista</h4>
	<pre><span class="bold">./src/main/webapp/index.html</span><code>&lt;form action=&quot;/createPersona&quot;&gt;
&lt;input type=&quot;text&quot; name=&quot;nombre&quot;&gt;
&lt;input type=&quot;submit&quot; value=&quot;Alta&quot;&gt;
&lt;/form&gt;</code></pre>
</div>
		<div class="col-md-9"><h4>Controlador</h4>
<pre><span class="bold">com.pablomonteserin.prueba.controller.PersonaController</span><code>@Controller // @RestController
public class PersonaController {	
	
	@Autowired
	private PersonaRepository personaRepository;
	
	@RequestMapping(path = "/createPersona", method = RequestMethod.GET)
	public String submit(@ModelAttribute("persona")Persona persona, ModelMap model) throws IOException{
		personaRepository.save(persona);
		return "redirect:index.html";
	}
}</code></pre></div>
	</div>
	

<h5>Otros ejemplos de controlador</h5>
<pre><span class="bold">Recuperando datos sin asociarlos<br>automáticamente al bean del modelo</span><code>@RequestMapping(path = "/createPaciente", method = RequestMethod.GET)
public String createPaciente(@ModelAttribute("nombre")String nombre, @ModelAttribute("apellidos")String apellidos,@ModelAttribute("fecha_alta")String fechaAlta,ModelMap model) {
	Paciente paciente = new Paciente();
	paciente.setNombre(nombre);
	paciente.setApellidos(apellidos);

	try {
		Date fechaAltaDate=simpleDateFormat.parse(fechaAlta);
		paciente.setFecha_alta(fechaAltaDate);
	} catch (ParseException e) {
		e.printStackTrace();
		System.out.println("Algo salió mal");
	}
				
	pacienteRepository.save(paciente);
	return "redirect:index.html";
}</code></pre>


<pre><span class="bold">Yendo a una vista en la que se cargarán los datos</span><code>@RequestMapping(path = &quot;/consultaPacientes&quot;, method = RequestMethod.GET)
public ModelAndView consultaPacientes(ModelMap model) {
	Iterable&lt;Paciente&gt; pacientes = pacienteRepository.findAll();
	ModelAndView modelo = new ModelAndView(&quot;consulta&quot;);
	model.addAttribute(&quot;pacientes&quot;, pacientes);
	return modelo;
}</code></pre>

<h4>Modelo</h4>
<pre><span class="bold">com.pablomonteserin.prueba.persistence.repository.Persona;</span><code>public interface PersonaRepository extends CrudRepository&lt;Persona, Integer&gt; {

}</code></pre>


	<pre><span class="bold">com.pablomonteserin.prueba.config.PruebaConfiguration</span><br>(configuración del acceso a la base de datos)<code>@Configuration
@EnableJpaRepositories(basePackages = "com.pablomonteserin.prueba.persistence.repository")
@EnableTransactionManagement
public class PruebaConfiguration {
	
	@Bean
	public PlatformTransactionManager transactionManager(EntityManagerFactory emf) {
	    JpaTransactionManager transactionManager = new JpaTransactionManager();
	    transactionManager.setEntityManagerFactory(emf);
	 
	    return transactionManager;
	}
	@Bean
	   public LocalContainerEntityManagerFactoryBean entityManagerFactory() {
	      LocalContainerEntityManagerFactoryBean em 
	        = new LocalContainerEntityManagerFactoryBean();
	      em.setDataSource(dataSource());
	      em.setPackagesToScan("com.pablomonteserin.prueba.persistence.model");
	 
	      JpaVendorAdapter vendorAdapter = new HibernateJpaVendorAdapter();
	      em.setJpaVendorAdapter(vendorAdapter);
	      em.setJpaProperties(additionalProperties());
	 
	      return em;
	   }
	@Bean
	public DataSource dataSource(){
	    DriverManagerDataSource dataSource = new DriverManagerDataSource();
	    dataSource.setDriverClassName("com.mysql.cj.jdbc.Driver");
	    dataSource.setUrl("jdbc:mysql://localhost:3306/persona?serverTimezone=UTC");
	    dataSource.setUsername( "pm" );
	    dataSource.setPassword( "pp" );
	    return dataSource;
	}
	private Properties additionalProperties() {
	    Properties properties = new Properties();
	    properties.setProperty("hibernate.hbm2ddl.auto", "create");
	    properties.setProperty("hibernate.dialect", "org.hibernate.dialect.MySQL5Dialect");
	        
	    return properties;
	}
}</code></pre>

<h4>Aplicación</h4>

<div class="row">
	<div class="col-md-10"><p>Este fichero se coloca habitualmente en la raíz del árbol de directorios del proyecto. Este fichero es el que se lanza cuando hacemos <span class="i">run as</span>.</p>
<pre><span class="bold">com.pablomonteserin.PruebaApplication</span><code>@SpringBootApplication
public class PruebaApplication {

	public static void main(String[] args) {
		SpringApplication.run(PruebaApplication.class, args);
	}

}</code></pre></div>
	<div class="col-md-2"><?= getRes('recurso','zip/prueba.zip', 'Descargar ejercicio') ?></div>
</div>



</div></article>

<article><div>
	<h2 id="cargarjstl">Cargar JSTL</h2>

<div class="row">
	<div class="col-md-6"><p>Debemos definir en el <span class="i">pom.xml</span> que el empaquetado de la aplicación será <span class="i">war</span>, puesto que es una aplicación web.</p>
<pre><span class="bold">pom.xml</span><code>&lt;packaging&gt;war&lt;/packaging&gt;</code></pre>
</div>
	<div class="col-md-6"><p>También en el <span class="i">pom.xml</span> debemos cargar las dependencias para usar <span class="i">JSTL</span>.</p>
<pre><code>&lt;!--  Para Usar JSTL --&gt;
&lt;dependency&gt;
    &lt;groupId&gt;javax.servlet&lt;/groupId&gt;
    &lt;artifactId&gt;jstl&lt;/artifactId&gt;
&lt;/dependency&gt;
		
&lt;!--  Para Usar JSTL con Spring --&gt;
&lt;dependency&gt;
	&lt;groupId&gt;org.apache.tomcat.embed&lt;/groupId&gt;
	&lt;artifactId&gt;tomcat-embed-jasper&lt;/artifactId&gt;
	&lt;scope&gt;provided&lt;/scope&gt;
&lt;/dependency&gt;</code></pre></div>
</div>

<div class="row">
	<div class="col-md-6"><p>Los ficheros <span class="i">JSP</span> serán almacenados en la ruta:</p>
<pre><code>./src/main/webapp/WEB-INF/jsp/consulta.jsp</code></pre>
</div>
	<div class="col-md-6"><p>Modificaremos el application properties para que use lo que hay en esa ruta:</p>
<pre><span class="bold">./src/main/resources/application.properties</span><code>spring.mvc.view.prefix=/WEB-INF/jsp/
spring.mvc.view.suffix=.jsp</code></pre></div>
</div>




</div></article>
<article><div>
	<h2 id="enrutamientoautomatico">Enrutamiento automático</h2>

	<pre><code>@Configuration
@EnableWebMvc
public class WebConfiguration implements WebMvcConfigurer  {
	@Override
	public void addViewControllers(ViewControllerRegistry registry) {
		registry.addViewController("/").setViewName("index");
		// Obtiene el nombre de la vista en base a la url.
		// Ejemplo: /view/cosas -> /weapp/WEB-INF/cosas.jsp    
		registry.addViewController("/view/**");   
	}
}</code></pre>
</div></article>

<article><div>
	<h2 id="ejerciciosspringboot">Ejercicios Spring Boot</h2>
	<h3>Ejercicio - invitados</h3>


	<p>Hacer una página web para una lista de invitados con 4 secciones. Una para consultar los invitados, otra para dar de alta un nuevo invitado y otra para darlo de baja.La tabla que usaremos tendrá dos campos: nombre (VARCHAR) e ID (INT, AUTOINCREMENT, PK).</p>

<div class="row">
	<div class="col-md-10">
<p>Cada uno de los siguientes pantallazos representa una página diferente.</p>
<div class="centraditos">
<img style="border:1px solid black; vertical-align: top" src="img/lista-invitados/menu-spring-boot.png" alt="menu aplicación con spring boot y mysql">

<img style="border:1px solid black; vertical-align: top" src="img/lista-invitados/alta-spring-boot-mysql.png" alt="alta con spring boot y mysql">

<img style="border:1px solid black; vertical-align: top" src="img/lista-invitados/baja-spring-boot-mysql.png" alt="baja con spring boot y mysql">

<img style="border:1px solid black; vertical-align: top" src="img/lista-invitados/consulta-spring-boot-mysql.png" alt="baja con spring boot y mysql">
</div>
</div>
	<div class="col-md-2"><?= getRes('recurso','zip/ListaInvitados.zip', 'Descargar ejercicio') ?></div>
</div>

</div></article>

<article><div>
	<h3>Patrones de diseño</h3>
	<h4>Patrones arquitectónicos</h4>
	<h5>Modelo de tres capas</h5>
	
</div></article>

<article><div>
	<h3>Ejercicio Futbol</h3>
	<div style="display: flex; align-items: flex-start;">
		
	<img style="width: 80%" src="img/consulta-base-datos-spring.png" alt="consulta base de datos con spring">

	<img style="width: 20%" src="img/consulta-jugadores-futbol.png" alt="consulta jugadores futbol">

	</div>

<pre><span class="bold">Necesitaremos añadir este código al repository</span><code>@Query("SELECT e FROM Equipo e WHERE e.equipo_cod=:id")
Equipo findEquipoByEquipoCod(@Param("id")int id);</code></pre>
	<div class="centraditos">
<?= getRes("recurso","zip/futbol.sql", "Descargar base de datos") ?>
<?= getRes("recurso","zip/imagenes-futbol.zip", "Descargar imágenes") ?>
<?= getRes("recurso","zip/entity-futbol.zip", "Entidades para usar en Hibernate") ?>

<?= getRes('recurso','zip/futbol.zip', 'Descargar ejercicio resuelto') ?>

</div>
</div></article>
<article><div>
	<h3>Ejercicio hospital</h3>
<img src="img/hospitalI.svg" alt="ejercicio crud hospital con spring boot">

<div class="row">
	<div class="col-md-10"><p>Para evitar que en spring la fecha se guarde correctamente sin poner un día de menos:</p>
<pre><code>SimpleDateFormar fADate = new SimpleDateFormat("yyyy-MM-dd");
fADate.setTimeZone(TimeZone.getTimeZone("PST"));</code></pre></div>
	<div class="col-md-2"><?= getRes('recurso','zip/Hospital.zip', 'Descargar ejercicio hospital') ?></div>
</div>




</div></article>

<article><div>
	<h3>Ejercicio listado libros</h3>

	<div class="row">
		<div class="col-md-2">	<img class="img-fluid" src="img/listado-libros-1.svg" alt="ejercicio crud libros con spring boot"></div>
		<div class="col-md-5"><img class="img-fluid" src="img/listado-libros-2.svg" alt="ejercicio crud libros con spring boot"></div>
		<div class="col-md-5"><img class="img-fluid" src="img/listado-libros-3.svg" alt="ejercicio crud libros con spring boot"></div>
	</div>

	<div class="row">
		<div class="col-md-10"><img class="img-fluid" src="img/listado-libros-4.svg" alt="ejercicio crud libros con spring boot"></div>
		<div class="col-md-2"><?= getRes('recurso','zip/listadolibros.zip', 'Descargar ejercicio listado libros') ?></div>
	</div>
	
</div></article>


<article><div>
	<h3>Ejercicio mensajería</h3>
	<pre><span class="b">Para acceder a la sesión desde el controlador:</span><code>@RequestMapping(path = "/createMensajes", method = RequestMethod.GET)
public ModelAndView createMensaje(@ModelAttribute("mensaje")String mensaje,@ModelAttribute("ids[]")String ids[],HttpServletRequest request,ModelMap model) {
	HttpSession session = request.getSession();</code></pre>

<h4>Enviar y recoger un array de datos al servidor utilizando Spring Boot</h4>
	<pre><code>&lt;c:forEach var=&quot;usuario&quot; items=&quot;${usuarios}&quot;  varStatus=&quot;status&quot;&gt;
	&lt;li&gt;&lt;input name=&quot;ids[${status.index}]&quot; type=&quot;checkbox&quot; value=&quot;${usuario.id}&quot;&gt;
	&lt;c:out value=&quot;${usuario.nombre}&quot; /&gt;&lt;/li&gt;
&lt;/c:forEach&gt;</code></pre>

<div class="row">
	<div class="col-md-6"><pre><code>Arrays.stream(mensaje.getIds()).filter(id -> id!=null).forEach(id->{
	//El código que procesa la petición
});</code></pre></div>
	<div class="col-md-6"><pre><code>@Entity
public class Mensaje {
	...
	@Transient
	Integer ids[];</code></pre>
	
<pre><code>request.getParameterValues("ids")</code></pre></div>
</div>

<h4>Recoger un array de datos del servidor utilizando SpringBoot</h4>
	<p>También hubiera sido posible recoger los datos dándoles a todas las checkboxes el mismo name y utilizando en el controlador el método:</p>

<div class="row">
	<div class="col-md-10"><img class="img-fluid" src="img/mensajeria.svg" alt="ejercicio crud mensajes con spring boot"></div>
	<div class="col-md-2"><?= getRes('recurso','zip/mensajeria.zip', 'Descargar ejercicio mensajería') ?></div>
</div>

	
	

	
</div></article>

<article><div>
	<h3>Foro</h3>

	<div class="row">
		<div class="col-md-2"><?= getRes('recurso','zip/foro.zip', 'Descargar ejercicio foro') ?></div>
		<div class="col-md-10">	<img class="img-fluid" src="img/foro.svg" alt="ejercicio crud foro con spring boot"></div>
	</div>

	
</div></article>




<article><div>

	<h2 id="peticion-rest">Petición Rest</h2>
<pre><code>@Controller
public class MensajeController {

@RequestMapping(value = &quot;/findAll&quot;,method=RequestMethod.GET)
public Iterable&lt;Equipo&gt; findAll(){
	Iterable&lt;Equipo&gt; equipos = equipoRepository.findAll();
	return equipos;
}</code></pre>





	<h3>Enable CORS</h3>
	<pre>com.pablomonteserin.proyecto.configuration.WebConfiguration<code>@Configuration
@EnableWebMvc
public class WebConfiguration implements WebMvcConfigurer  {	
	@Override
	public void addCorsMappings(CorsRegistry registry) {
		registry.addMapping("/**").allowedMethods("GET","POST").allowedOrigins("*");
	}
}</code></pre>

</main>














<?php 
});
include $path."/diapos_theme/footer.php";
?>