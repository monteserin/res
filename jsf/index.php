<?php 
/*
$titulo_curso="JSF 1";

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";

include $path."diapos_theme/head.php";
$modulo = isset($_GET['modulo']) ? $_GET['modulo']:'';
add_action( 'genesis_after_header', function(){
	global $path;
	include $path."diapos_theme/body_init.php";
	echo "<h1>$titulo_curso</h1>";
	*/
?>
<section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">
	<ol>
		<li><a href="#caracteristicas">¿Qué es Bootstrap?</a></li>
			<li><a href="#hola_mundo">Hola mundo - redireccionamiento directo</a></li>
			<li><a href="#saludar">Saludar - el action en un parametro de navegacion</a></li>
			<li><a href="#saludar_con_param">Saludar con parámetros</a></li>
			<li><a href="#ejercicio_sumador">Ejercicio - sumador</a></li>
			<li><a href="#carga_combo">Cargar una combo</a></li>
			<li><a href="#error_tipico">Error típico</a></li>
			<li><a href="#ejercicio_calculadora">Ejercicio calculadora</a></li>
			<li><a href="#sesion_contexto">Manejo de la sesión y el contexto</a></li>
			<li><a href="#datatable">Datatable</a></li>
			<li><a href="#enlaces">Enlaces</a></li>
			<li><a href="#ejercicio_libreria">Ejercicio librería</a></li>
			<li><a href="#ejercicio_hospital">Ejercicio hospital</a></li>
			</ol>
</article>
</section>
<main class="curso">
<article>
<h2 id="caracteristicas">Características</h2>
<p>Implementa el controlador y me da una ayuda con la vista. Conceptualmente struts2 y jsf hacen lo mismo. Hay que tener cuidado al meter código javascript en un documento con etiquetas JSF, se mezclan mal.</p>
<p>El código html y javascript generado por jsf:
<ul>
	<li>es difícil de entender. El generado por struts2, no.</li>
	<li>no debe ser modificado. Esto implica problemas cuando queremos crear o modificar tags de JSF.</li>
</ul>
</p>
<p>Por otra parte, JSF es un estandar de java, de hecho utiliza las librerías JSTL.</p>

	<p>Existen varias implementaciones de jsf:</p>
	<p>MyFaces <br>
RichFaces (quizás la más utilizada) <br>
IceFaces <br>
...
	</p>
	<p>Cada versión implementa el standard, además te da sus propios tags.</p>

	<p>El autor de Struts1 hizo JSF 1.</p>


</article>
<article>
	<h2 id="hola_mundo">Hola mundo - redireccionamiento directo</h2>
<pre><span class="black bold">index.html</span><code>&lt;meta http-equiv=&quot;Refresh&quot; content= &quot;0; URL=holaMundo.faces&quot;/&gt;</code></pre>
<pre><span class="black bold">web.xml</span><code>
En jsf todo lo que est&aacute; mapeado con <span class="red bold">faces</span> se redirige al <span class="blue">servlet faces</span>.

&lt;servlet&gt;
      &lt;servlet-name&gt;Faces Servlet&lt;/servlet-name&gt;
      &lt;servlet-class&gt;<span class="blue">javax.faces.webapp.FacesServlet</span>&lt;/servlet-class&gt;
      &lt;load-on-startup&gt;1&lt;/load-on-startup&gt;
&lt;/servlet&gt;   
&lt;servlet-mapping&gt;
      &lt;servlet-name&gt;Faces Servlet&lt;/servlet-name&gt;
      &lt;url-pattern&gt;<span class="bold red">*.faces</span>&lt;/url-pattern&gt;
&lt;/servlet-mapping&gt;  
</code></pre>
<pre><span class="bold black">faces-config.xml</span><code>
&lt;?xml version=&quot;1.0&quot;?&gt;
&lt;faces-config xmlns=&quot;http://java.sun.com/xml/ns/javaee&quot;
	xmlns:xsi=&quot;http://www.w3.org/2001/XMLSchema-instance&quot;
	xsi:schemaLocation=&quot;http://java.sun.com/xml/ns/javaee 
        http://java.sun.com/xml/ns/javaee/web-facesconfig_1_2.xsd&quot;
	version=&quot;1.2&quot;&gt;
 &lt;/faces-config&gt;</code></pre>
<pre><span class="black bold">holaMundo.jsp</span><code>
hola Mundo!</code></pre>
<p>Una redirección a holaMundo.faces irá a holaMundo.jsp cargando el context de JSF (FacesContext). A partir de ese momento será posible utilizar las etiquetas de JSF.</p>
<a href="">Falta enlace a projecto jsf: a_holaMundo.zip</a>
</article>

<article>
	<h2 id="saludar">Saludar – el action es un parámetro de navegación</h2>
<pre><span class="bold black">saludar.jsp</span><code>
&lt;html&gt;
&lt;%@ taglib uri=&quot;http://java.sun.com/jsf/html&quot; prefix=&quot;h&quot;%&gt;
&lt;%@ taglib uri=&quot;http://java.sun.com/jsf/core&quot; prefix=&quot;f&quot;%&gt;

Las etiquetas de JSF deben estar dentro de las etiquetas &lt;f:view&gt;, las cuales sulen comenzar inmediatamente después de &lt;body&gt; y terminar inmediatamente antes de &lt;/body&gt;
&lt;f:view&gt;
	&lt;h:form&gt;
		&lt;h:outputText value=&quot;#{<span class="bold blue">msgs</span>.inicioSaludo}&quot; /&gt;
		&lt;h:inputText value=&quot;#{<span class="bold red">SaludarBB</span>.nombre}&quot; /&gt;
Las etiquetas de JSF que utilicen el atributo action deben ir dentro de la etiqueta &lt;h:form&gt;
		&lt;h:commandButton action=&quot;<span class="purple bold">next</span>&quot; /&gt;
	&lt;/h:form&gt;
&lt;/f:view&gt;
&lt;/html&gt;</code></pre>
<pre><span class="bold black">messages.properties</span><code>
inicioSaludo =hola, introduce tu nombre
hola= hola</code></pre>
<pre><span class="bold black">web.xml</span><code>
&lt;servlet&gt;
      &lt;servlet-name&gt;Faces Servlet&lt;/servlet-name&gt;
      &lt;servlet-class&gt;javax.faces.webapp.FacesServlet&lt;/servlet-class&gt;
      &lt;load-on-startup&gt;1&lt;/load-on-startup&gt;
&lt;/servlet&gt;   

&lt;servlet-mapping&gt;
      &lt;servlet-name&gt;Faces Servlet&lt;/servlet-name&gt;
      &lt;url-pattern&gt;*.faces&lt;/url-pattern&gt;
&lt;/servlet-mapping&gt;</code></pre>
<pre><span class="bold black">faces-config.xml</span><code>
&lt;navigation-rule&gt;
	&lt;from-view-id&gt;/saludar.jsp&lt;/from-view-id&gt;
	&lt;navigation-case&gt;
	<span class="green">Tendremos un solo &lt;from-view-id&gt; por cada &lt;navigation-rule&gt;</span>
		&lt;from-outcome&gt;<span class="purple bold">next</span>&lt;/from-outcome&gt;
		&lt;to-view-id&gt;/pagina2.jsp&lt;/to-view-id&gt;
	&lt;/navigation-case&gt;
&lt;/navigation-rule&gt;
&lt;managed-bean&gt;
	&lt;managed-<span class="orange">bean-name</span>&gt;<span class="bold red">SaludarBB</span>&lt;/managed-<span class="orange">bean-name</span>&gt;
	&lt;managed-<span class="orange">bean-class</span>&gt;<span class="bold red">com.pablomonteserin.beans.SaludarBB</span>&lt;/managed-<span class="orange">bean-class</span>&gt;
	&lt;managed-bean-scope&gt;session&lt;/managed-bean-scope&gt;
&lt;/managed-bean&gt;   
&lt;application&gt;
	&lt;resource-bundle&gt;
	<span class="purple">Esto referencia al fichero messages.properties  colocado en com.pablomonteserin</span>
		<span class="purple">&lt;base-name&gt;com.pablomonteserin.messages&lt;/base-name&gt;</span>
		&lt;var&gt;<span class="bold blue">msgs</span>&lt;/var&gt;
	&lt;/resource-bundle&gt;
&lt;/application&gt;</code></pre>

<pre><span class="bold black">SaludarBB.java</span><code>
package com.pablomonteserin.beans;

public class SaludarBB {
	private String <span class="red bold">nombre</span>;

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	
}</code></pre>
<pre><code>&lt;f:view&gt;	
	&lt;h:outputText value=&quot;#{<span class="blue bold">msgs</span>.hola}&quot; /&gt;&amp;nbsp;
	&lt;h:outputText value=&quot;#{<span class="red bold">SaludarBB</span>.nombre}&quot; /&gt;
&lt;/f:view&gt;</code></pre>
</article>
<article>
	<h2>Saludar – el action es <span class="purple bold">un método del BackingBean </span></h2>
<pre><code><span class="bold black">index.jsp</span>
&lt;html&gt;
&lt;%@ taglib uri=&quot;http://java.sun.com/jsf/html&quot; prefix=&quot;h&quot;%&gt;
&lt;%@ taglib uri=&quot;http://java.sun.com/jsf/core&quot; prefix=&quot;f&quot;%&gt;

&lt;f:view&gt;
	&lt;h:form&gt;
		&lt;h:outputText value=&quot;#{<span class="bold blue">msgs</span>.inicioSaludo}&quot; /&gt;
		&lt;h:inputText value=&quot;#{<span class="bold red">SaludarBB</span>.nombre}&quot; /&gt;
		&lt;h:commandButton action=&quot;<span class="bold purple">#{SaludarBB.saludar}</span>&quot;/&gt;
	&lt;/h:form&gt;

		
	&lt;h:outputText value=&quot;#{<span class="bold blue">msgs</span>.hola}&quot; /&gt;&amp;nbsp;
	&lt;h:outputText value=&quot;#{<span class="red bold">SaludarBB</span>.nombre}&quot; /&gt;
&lt;/f:view&gt;
&lt;/html&gt;</code></pre>

<pre><code><span class="bold black">messages.properties</span>
inicioSaludo = hola, introduce tu nombre
hola= hola</code></pre>
<pre><code><span class="bold black">web.xml</span>
&lt;servlet&gt;
	&lt;servlet-name&gt;Faces Servlet&lt;/servlet-name&gt;
	&lt;servlet-class&gt;javax.faces.webapp.FacesServlet
	&lt;/servlet-class&gt;
	&lt;load-on-startup&gt;1&lt;/load-on-startup&gt;
&lt;/servlet&gt;   

&lt;servlet-mapping&gt;
	&lt;servlet-name&gt;Faces Servlet&lt;/servlet-name&gt;
	&lt;url-pattern&gt;*.faces&lt;/url-pattern&gt;
&lt;/servlet-mapping&gt;</code></pre>
<pre><code><span class="bold black">faces-config.xml</span>
&lt;navigation-rule&gt;
	&lt;from-view-id&gt;/saludar.jsp&lt;/from-view-id&gt;
	&lt;navigation-case&gt;
		&lt;from-outcome&gt;<span class="purple bold">next</span>&lt;/from-outcome&gt;
		&lt;to-view-id&gt;/pagina2.jsp&lt;/to-view-id&gt;
	&lt;/navigation-case&gt;
&lt;/navigation-rule&gt;
&lt;managed-bean&gt;
	&lt;managed-bean-name&gt;<span class="bold red">SaludarBB</span>&lt;/managed-bean-name&gt;
	&lt;managed-bean-class&gt;<span class="bold red">com.pablomonteserin.beans.SaludarBB</span>&lt;/managed-bean-class&gt;
	&lt;managed-bean-scope&gt;session&lt;/managed-bean-scope&gt;
&lt;/managed-bean&gt;   
&lt;application&gt;
	&lt;resource-bundle&gt;
		&lt;base-name&gt;com.pablomonteserin.messages&lt;/base-name&gt;
		&lt;var&gt;<span class="bold blue">msgs</span>&lt;/var&gt;
	&lt;/resource-bundle&gt;
&lt;/application&gt;</code></pre>

<pre><code><span class="bold black">SaludarBB.java</span>
package com.pablomonteserin.beans;

public class SaludarBB {
	private String <span class="bold red">nombre</span>;
	public String getNombre() {
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	public String <span class="bold purple">saludar</span>(){
		<span class="green">//busqueda en BD, etc...
/*devolvemos el par&aacute;metro de  navegaci&oacute;n,
 equivalente a SUCCESS de struts */</span>
		return &quot;next&quot;;
	}
}</code></pre>
</article>
<article>
	<h2 id="saludar_con_param">Saludar con parámetros</h2>
<pre><code><span class="bold black">saludar.jsp</span>
...
&lt;h:outputFormat value=&quot;Hola, que pasa {0}&quot;&gt;
	&lt;f:param value=&quot;#{SaludarBB.nombre}&quot; /&gt;
&lt;/h:outputFormat&gt;
&lt;h:outputFormat value=&quot;#{msgs.hola}&quot;&gt;
	&lt;f:param value=&quot;#{SaludarBB.nombre}&quot; /&gt;
&lt;/h:outputFormat&gt;	</code></pre>

<pre><code><span class="bold black">messages.properties</span>
hola=Hola {0}</code></pre>
</article>

<article>
	<h2 id="ejercicio_sumador">Ejercicio - sumador</h2>
	<p>Hacer una aplicación que sume dos números:</p>

</article>
<article>
	<h2 id="carga_combo">Cargar una Combo</h2>
	<p>Podemos poner expl&iacute;citamente las option de la combo...	</p>


		<pre><code>&lt;h:selectOneMenu  value=&quot;#{OperaBB.op}&quot;&gt;
		&lt;f:selectItem itemLabel=&quot;suma&quot; itemValue=&quot;suma&quot; /&gt;
		&lt;f:selectItem itemLabel=&quot;resta&quot; itemValue=&quot;resta&quot; /&gt;
		&lt;f:selectItem itemLabel=&quot;multiplicacion&quot; itemValue=&quot;multiplicacion&quot; /&gt;
		&lt;f:selectItem itemLabel=&quot;division&quot; itemValue=&quot;division&quot; /&gt;
&lt;/h:selectOneMenu&gt;</code></pre>

	
<pre><code>&#x2026; o recuperar las combos del Backing Bean:
<span class="green">//Estas operaciones las recuperar&iacute;amos de la base de datos
//Para este m&eacute;todo no es necesario declarar su correspondiente atributo, ya que s&oacute;lo vamos a querer recuperarlo, no modificarlo-
//De esta forma, nos evitamos tener cargado en memoria grandes colecciones de datos.</span>
		
&lt;h:selectOneMenu  value=&quot;#{OperaBB.op}&quot;&gt;
	&lt;f:selectItems value=&quot;#{OperaBB.<span class="bold red">operaciones</span>}&quot;/&gt;
&lt;/h:selectOneMenu&gt;

public ArrayList&lt;SelectItem&gt; <span class="red bold">getOperaciones</span>(){
	ArrayList&lt;SelectItem&gt; al = new ArrayList&lt;SelectItem&gt;();
	al.add(new SelectItem(&quot;suma&quot;, &quot;+&quot;));
	al.add(new SelectItem(&quot;resta&quot;, &quot;-&quot;));
	al.add(new SelectItem(&quot;multiplicacion&quot;, &quot;*&quot;));
	al.add(new SelectItem(&quot;division&quot;, &quot;/&quot;));
	return al;
}</code></pre>	
</article>

<article>
	<h2 id="error_tipico">Error típico</h2>
	<p class="red">Objetivo inalcanzable, 'objeto' devolvió nulo: javax.el.PropertyNotFoundException </p>
	<p>Comprobar: que el BackingBean al que estamos llamando:</p>
<ul>
	<li>implementa la interfaz Serializable.</li>
	<li>tiene getters y setters de la propiedad que estamos recuperando.</li>
	<li>inicializa en su constructor vacío el objeto al que estamos llamando (en caso de que sea un objeto tipo Persona, con propiedades, etc. )
<pre><code>
MantenimientoLibroBB(){
	libro = new Libro();
	... 
}</code></pre>
	</li>
	<li>En el output text se está llamando a un metodo del BackingBean en lugar de imprimir el resultado.</li>
</ul>
</article>
<article>
	<h2 id="ejercicio_calculadora">Ejercicio calculadora</h2>
	<img src="img/calculadora.svg" alt="pantallazo calculadora">
</article>
<article>
	<h2 id="sesion_contexto">Manejo de la sesión y el contexto</h2>
<pre><span class="bold black">En el listener:</span><code>
HttpSession session = arg0.getSession();
session.setAttribute(&quot;sumaTotal&quot;, new Integer(0));

ServletContext sc = arg0.getServletContext();
sc.setAttribute(&quot;sumaApplication&quot;, new Integer(0));
</code></pre>
<pre><span class="bold black">En el bean:</span><code>
FacesContext context = FacesContext.getCurrentInstance();
Map sessionMap = (Map) context.getExternalContext().getSessionMap();
Map applicationMap = (Map) context.getExternalContext().getApplicationMap();
</code></pre>
<pre><span class="black bold">Imprimir valores en la vista, recogiendolos de la sesi&oacute;n:</span><code>
&lt;h:outputText value=&quot;#{sessionScope.sumaSesion}&quot; /&gt;
&lt;h:outputText value=&quot;#{applicationScope.sumaApplication}&quot; /&gt;

	</code>
</pre>
	<h3>Ejercicio</h3>
<p>Hacer una página que me permita ingresar dos números y me muestre:</p>

<ul>
	<li>El total de la suma.</li>
	<li>El total de la suma de los números en sesión.</li>
	<li>El total de la suma de todas las sumas del contexto.</li>
</ul>
</article>

<article>
	<h2 id="datatable">datatable </h2>
<pre><code>&lt;h:dataTable value=&quot;#{LibroBB.libros}&quot; var=&quot;libro&quot;
	columnClasses=&quot;column1,column2&quot;&gt;

	&lt;h:column&gt;
		&lt;f:facet name=&quot;header&quot;&gt;
			&lt;h:outputText value=&quot;precio&quot; /&gt;
		&lt;/f:facet&gt;
		&lt;h:outputText value=&quot;#{libro.precio}&quot; /&gt;
	&lt;/h:column&gt;

	&lt;h:column&gt;
		&lt;f:facet name=&quot;header&quot;&gt;
			&lt;h:outputText value=&quot;titulo&quot; /&gt;
		&lt;/f:facet&gt;
		&lt;h:outputText value=&quot;#{libro.titulo}&quot; /&gt;
	&lt;/h:column&gt;

&lt;/h:dataTable&gt;
<div class="notas">
	<span class="bold black">Notas:</span>
	<ul>
		<li>No poner &lt;h:form&gt; dentro de un datatable</li>
		<li>&lt;h:commandLink /&gt; que mandan informaci&oacute;n a un BackingBean cuyo &lt;managed-bean-scope&gt; es request, no env&iacute;an la informaci&oacute;n. Podr&iacute;a ser session.</li>
	</ul>
</div></code></pre>
</article>

<article>
	<h2 id="enlaces">enlaces</h2>
<pre><code>Esta la etiqueta de JSF para hacer enlaces:

&lt;h:outputLink id=&quot;link1&quot; value=&quot;http://www.pablomonteserin.com&quot;&gt;
texto enlace
&lt;/h:outputLink&gt;

&lt;h:commandLink value=&quot;Volver a inicio&quot; action=&quot;inicio&quot; /&gt;

&lt;h:commandLink value=&quot;#{libro.id}&quot; action=&quot;#{LibroBB.inicioModifica}&quot;&gt;
	&lt;f:param value=&quot;#{libro.id}&quot; name=&quot;libro.id&quot; /&gt;
&lt;/h:commandLink&gt;

<span class="red bold">Recuperar un par&aacute;metro en JSF no es tan trivial como en Struts 2. Para hacerlo, habr&aacute; que utilizar el siguiente c&oacute;digo:</span> <br>
String idString = FacesContext.getCurrentInstance().getExternalContext().getRequestParameterMap().get(&quot;nombreDelParametro&quot;);</code></pre>
</article>
<article>
	<h2 id="ejercicio_libreria">Ejercicio - librería</h2>
<img src="img/libreria.svg" alt="librería">
</article>

<article>
	<h2>Una combo actualiza el resto de campos del formulario</h2>
	<pre><span class="block bold">modificacion.jsp</span><code>&lt;h:form id=&quot;<span class="red bold">formulario</span>&quot;&gt;
&lt;h:selectOneMenu value=&quot;#{MantenimientoPacienteBB.paciente.id}&quot; onchange=&quot;submit()&quot; <span class="green bold">immediate=&quot;true&quot;</span> valueChangeListener=&quot;#{MantenimientoPacienteBB.<span class="blue bold">consultaPaciente</span>}&quot;&gt;
	&lt;f:selectItems value=&quot;#{MantenimientoPacienteBB.selectItemPacientes}&quot; /&gt; 
&lt;/h:selectOneMenu&gt;&lt;br/&gt;	
&lt;h:outputText value=&quot;Introduzca el nombre&quot; /&gt;
<span class="green">&lt;!-- <span class="bold green">inmediate=&quot;true&quot;</span> permite completar una petici&oacute;n sin que el formulario enviado sea validado, enviando s&oacute;lo los datos enviados--&gt;</span>
&lt;h:inputText id=&quot;<span class="purple bold">nombre</span>&quot; value=&quot;#{MantenimientoPacienteBB.paciente.nombre}&quot; immediate=&quot;true&quot; /&gt;
</code></pre>
<pre><span class="black bold">MantenimientoPacienteBB.java</span><code>
public void <span class="bold blue">consultaPaciente</span>(ValueChangeEvent e){
	Integer id = (Integer) e.getNewValue();
	paciente=PacienteBO.getPaciente(id);
	//esto para refrescar campos inputtext
	HtmlInputText inputTextGP = (HtmlInputText)FacesContext.getCurrentInstance().getViewRoot().findComponent(&quot;<span class="bold red">formulario</span>:<span class="bold purple">nombre</span>&quot;);
	inputTextGP.setValue(paciente.getNombre());
	FacesContext.getCurrentInstance().renderResponse();
}
		</code>
	</pre>
</article>
<article>
	<h2 id="ejercicio_hospital">Ejercicio - hospital</h2>
	<p>La base de datos tendrá 4 campos: id(PRIMARY KEY, AUTOINCREMENT), nombre (VARCHAR),
apellidos (VARCHAR), fecha_alta(DATE).</p>
<p>Para convertir una fecha en un objeto de tipo Date:</p>
<pre><code>SimpleDateFormat formatter = new SimpleDateFormat('dd-MM-yyyy');
Date fecha = formatter.parse(stringFecha'));</code></pre>
<p>Estas conversiones las haremos en el controlador (No modificaremos el pojo paciente para añadirle las propiedades día, mes y año)
</p>
</article>
</main>
<?php 
//});
//include $path."/diapos_theme/footer.php";
?>