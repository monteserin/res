<?php 
/*$titulo_curso="JSF 2";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
add_action( 'genesis_after_header', function(){
	global $path;
	include $path."diapos_theme/body_init.php";
	echo "<h1>$titulo_curso</h1>";*/
?><section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">
	<ol>
		<li><a href="#instalacion">Instalación</a></li>
		<li><a href="#configuracion">Configuración de nuestro primer proyecto</a></li>
	</ol>
</article>
</section>
<main class="curso">
<section>

<article>
	<h2 id="instalacion">Instalación</h2>
	<p>En Eclipse:</p>

	<ol>

		<li>Botón derecho sobre el explorador de proyectos -> new -> Dynamic web Project</li>
		<li>Configuration: Java Server Faces v2.1 Project</li>

		<li>JSF Capabilities -> Botón de download -> JSF 2.1 (Apache MyFaces 2.1.5)</li>
</ol>

</article>

<article>
	<h2 id="configuracion">Configuración de nuestro primer proyecto</h2>

	<pre><span class="black bold">index.xhtml</span><code>&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot; 
 &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&quot;&gt;
&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;
	xmlns:h=&quot;http://java.sun.com/jsf/html&quot;
	xmlns:f=&quot;http://java.sun.com/jsf/core&quot;
	xmlns:ui=&quot;http://java.sun.com/jsf/facelets&quot;&gt;

&lt;h:head&gt;
	&lt;title&gt;Insert title here&lt;/title&gt;
&lt;/h:head&gt;
&lt;h:body&gt;
	https://docs.oracle.com/javaee/6/javaserverfaces/2.1/docs/vdldocs/facelets/	
		&lt;h:form&gt;
		&lt;h:inputText label=&quot;id&quot; value=&quot;#{libroBB.libro.id}&quot; /&gt;
		&lt;h:inputText label=&quot;titulo&quot; value=&quot;#{libroBB.libro.titulo}&quot; /&gt;
		&lt;h:inputText label=&quot;precio&quot; value=&quot;#{libroBB.libro.precio}&quot; /&gt;
		&lt;h:commandButton value=&quot;Enviar&quot; action=&quot;#{libroBB.insertar}&quot; /&gt;
	&lt;/h:form&gt;
&lt;/h:body&gt;
&lt;/html&gt;</code></pre>

<pre><span class="black bold">LibroBB</span><code>@ManagedBean
public class LibroBB {
	private Libro libro;

	public LibroBB() {
		this.libro = new Libro();
	}

	public Libro getLibro() {

		return libro;
	}

	public void setLibro(Libro libro) {
		this.libro = libro;
	}

	public String insertar() {
		System.out.println(
				"Valores " + this.libro.getId() + " - " + this.libro.getPrecio() + " - " + this.libro.getTitulo());
		System.out.println("insertamos en la base de datos");
		return "/index.xhtml";
	}
}</code></pre>

</article>


<article>
	<p>Abriremos y cerraremos la etiqueta f:view justo antes de abrir y cerrar las etiquetas del body.</p>

	
</article>
<?php // getRes("recurso","zip/jsf2.zip", "Descargar configuración básica de un proyecto con JSF2") ?>


</section>
<section>
<h2>Etiquetas de la vista</h2>


<p>Deben estar dentro de las etiquetas &lt;h:body&gt;&lt;/h:body&gt;</p>
<article>
	<h3>Estructura básica de un documento JSF</h3>
	<pre><code>&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot; 
&quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&quot;&gt;
&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;
xmlns:h=&quot;http://java.sun.com/jsf/html&quot;
xmlns:f=&quot;http://java.sun.com/jsf/core&quot;
xmlns:ui=&quot;http://java.sun.com/jsf/facelets&quot;&gt;

&lt;h:head&gt;
	&lt;title&gt;Insert title here&lt;/title&gt;
&lt;/h:head&gt;
&lt;h:body&gt;

&lt;/h:body&gt;
&lt;/html&gt;</pre></code>
</article>
<article>
	<h3>Recorrer una colección de datos</h3>
	<pre><code>&lt;ui:repeat value=&quot;#{equipoBB.equipos}&quot; var=&quot;var&quot;&gt;
	&lt;h:outputText value=&quot;#{var.nombre}&quot; /&gt;
&lt;/ui:repeat&gt;</code></pre>

</article>

<article>
	<h3>Enviar un objeto desde un enlace dentro de la vista</h3>
	<pre><code>&lt;ui:repeat value=&quot;#{equipoBB.equipos}&quot; var=&quot;var&quot;&gt;
	&lt;h:form&gt;
		&lt;h:commandLink action=&quot;#{equipoBB.consultaEquipo(var)}&quot; value=&quot;Enviar&quot; /&gt;
	&lt;/h:form&gt;
&lt;/ui:repeat&gt;</code></pre>

<p>Para que funcione, en el backingBean debemos haber marcado su scope como de sesión:</p>
<pre><code>@ManagedBean
<strong>@SessionScoped</strong>
public class EquipoBB {</code></pre>
</article>

<article>
	<h3>Pintar una imagen</h3>
	<pre><code>&lt;h:graphicImage value=&quot;/imagenesFutbol/#{var.foto_escudo}&quot; /&gt;</code></pre>
</article>
</section>
<section>
<article>
	<h2>Ejercicio Futbol</h2>

	
	<p>La segunda carga una collection de beans de Equipo, y la tercera carga una collection de beans de Jugador en función de un parámetro (EQUIPO_COD) que fue procesado en el controlador.</p>
<div class="row">
<?php // getRes("recurso","/curso/assets/bd/futbol.sql", "Descargar base de datos") ?>
<?php // getRes("recurso","/curso/assets/zip/imagenesFutbol.zip", "Descargar imágenes") ?>
<?php // getRes("recurso","/curso/assets/zip/entity.zip", "Entidades para usar en Hibernate") ?>

</div>
<img style="width:100%" src="img/futbol.svg" alt="Pantallazo ejercicio resuelto">

<?php // getRes("recurso","zip/ejercicio-futbol.zip", "Descargar ejercicio futbol resuelto") ?>

</article>

<article>
	<h2>Ejercicio Hospital</h2>

		<p>Para que el alta funcione correctamente, y de modo general, es necesario inicializar los objetos de los Backings Beans en el constructor</p>
	<pre><code>public PacienteBB() {
	this.paciente = new Paciente();
}</code></pre>
	<img class="responsive" src="img/hospital.jpg" alt="Ejercicio CRUD JSF"></a>

<?php // getRes("recurso","zip/ejercicio-hospital.zip", "Descargar ejercicio hospital resuelto") ?>

</article>


<article>
	<h2>Validación</h2>
<pre><code>&lt;h:outputLabel for=&quot;nombre&quot;&gt;Nombre:&lt;/h:outputLabel&gt;
&lt;h:inputText id=&quot;nombre&quot; value=&quot;#{pacienteBB.paciente.nombre}&quot; &gt;
	&lt;f:validator validatorId=&quot;validacionNombre&quot; /&gt;
&lt;/h:inputText&gt;
&lt;h:message id=&quot;m2b&quot; for=&quot;nombre&quot; style=&quot;color:red&quot; /&gt;</code></pre>

<pre><span class="black bold">ValidacionNombre</span><code>@FacesValidator("validacionNombre")
public class ValidacionNombre implements Validator {

	@Override
	public void validate(FacesContext arg0, UIComponent arg1, Object arg2) throws ValidatorException {	
		System.out.println(arg2.toString().length());
		if(arg2.toString().length() < 5) {
			System.out.println("menor de 5");
			 FacesMessage msg =
		              new FacesMessage("Error en la validación del nombre",
		              "Por favor introduzca un nombre de más de 5 dígitos");
		      msg.setSeverity(FacesMessage.SEVERITY_ERROR);      
		      throw new ValidatorException(msg);
		}
	}
}</code></pre>
</article>
<article>
	<h2>Ejercicio Calidades</h2>
<img style="width:100%" src="img/ejercicio-calidades-futbol-con-jsf.png" alt="Pantallazo ejercicio resuelto">
<h4>Etiqueta &lt;f:ajax</h4>
<ul>
	<li><span class="black bold">render</span>: Este atributo indica la id del elemento donde se va a almacenar el resultado de la petición ajax.</li>
	<li><span class="black bold">event</span>: Este atributo indica el tipo de evento que detonará la petición ajax.</li>
	<li><span class="black bold">&lt;h:panelGroup</span>: Para poder pintar el resultado de la petición ajax en un componente de tipo &lt;ui:repeat, este debe estar dentro de un componente &lt;h:panelGroup.</li>
</ul>
<pre><code>&lt;h:form&gt;
	&lt;h:selectOneMenu&gt;
		&lt;f:ajax listener=&quot;#{equipoBB.<span class="pink bold">listener</span>}&quot; render=&quot;jugadores&quot; event=&quot;change&quot;
		execute=&quot;@form&quot; /&gt;
		&lt;f:selectItems id=&quot;combo&quot; value=&quot;#{equipoBB.equipos}&quot; var=&quot;equipo&quot;
		itemLabel=&quot;#{equipo.nombre}&quot; itemValue=&quot;#{equipo.equipoCod}&quot; /&gt;
	&lt;/h:selectOneMenu&gt;
	&lt;h:panelGroup id=&quot;jugadores&quot;&gt;
		&lt;div style=&quot;display: flex&quot;&gt;
			&lt;ui:repeat id=&quot;cosas&quot; value=&quot;#{equipoBB.jugadores}&quot; var=&quot;var&quot;&gt;
				&lt;h:outputText value=&quot;#{var.numeroCamiseta}&quot; /&gt; - 
				&lt;h:outputText value=&quot;#{var.nombre}&quot; /&gt;&lt;br /&gt;
			&lt;/ui:repeat&gt;
		...</code></pre>
<pre><code>public void <span class="pink bold">listener</span>(AjaxBehaviorEvent event) {
		EquipoDAO equipoDAO = new EquipoDAO();
		int equipo_cod = Integer.parseInt((String) ((UIOutput)event.getSource()).getValue());
		jugadores = equipoDAO.getJugadoresByEquipo(equipo_cod);
		Iterator&lt;Jugador&gt; it = jugadores.iterator();
		calidades = new ArrayList&lt;String&gt;();
		while(it.hasNext()) {
			Jugador j = it.next();
			String calidad = &quot;&lt;div style=\&quot;background:yellow; width:20px; height:&quot;+j.getCalidad()*10+&quot;px\&quot;&gt;&lt;/div&gt;&quot;;
			calidades.add(calidad);
		}
	}</code></pre>
	<?php // getRes("recurso","zip/futbol-calidades.zip", "Descargar ejercicio calidades resuelto") ?>



<h3>Cómo podríamos realizar este ejercicio sin la etiqueta de Ajax:</h3>
<pre><code>&lt;h:selectOneMenu onchange=&quot;submit()&quot; valueChangeListener=&quot;#{equipoBB.consultaEquipo}&quot;&gt;</code></pre>


<pre><code>public void consultaEquipo(ValueChangeEvent event) {
	EquipoDAO equipoDAO = new EquipoDAO();
	jugadores = equipoDAO.getJugadoresByEquipo(Integer.parseInt((String) event.getNewValue()));
</code></pre>
</article>

<article>
	<h2>Ejercicio Mensajería</h2>
</article>

<article>
	<h2>Ejercicio Foro</h2>
</article>
</section>
</main>
<?php 
//});
//include $path."/diapos_theme/footer.php";
?>