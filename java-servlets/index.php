<?php 
$titulo_curso="Servlets ☕️";
$meta_description = 'En este curso veremos los fundamentos para iniciarte en el desarrollo de aplicaciones web con Java';
$img_curso = 'curso-servlets.svg';

$root2 =  __DIR__;
$path = substr($root2,0,strpos($root2, "curso"))."/curso/";
include $path."diapos_theme/head.php";
add_action( 'genesis_after_header', function(){
?>

<section id="amor" class="verIndice">
                <article id="inicio_del_documento" class="indice">
	<ol>
		<li><a href="#estaticas">Páginas estáticas</a></li>
		<li><a href="#peticiones">Peticiones al servidor: GET vs POST</a></li>
		<li><a href="#servlets">Servlets</a></li>
		<li><a href="#librerias_necesarias">Librerías necesarias</a></li>
		<li><a href="#servlet_live">Servlet's live</a></li>
		<li><a href="#recuperar_param">Recuperar parámetros del browser</a></li>
		<li><a href="#ejercicios">Ejercicios</a></li>
		</ol>
</article>
</section>	
<main class="curso">
<?= drawH1WithImg() ?>

<article>
	<div>
	<h2>Introducción al curso de Servlets</h2>
	<p>En la actualidad, salvo que te toque programar en un proyecto con mucha solera, es improbable que tengas que usar Servlets en tu aplicación. Lo normal es usar un framework. Habitualmente, será Spring Boot, aunque te puede tocar un proyecto con JSF, Struts, o cualquier otro. Todos los frameworks tienen algo en común: <span class="bold">los fundamentos</span>. Esto será lo que veremos en este curso.</p>
	<p>Estos fundamentos se repiten a lo largo de todos los frameworks para el desarrollo de aplicaciones web: coger datos de un formulario HTML, controlar el procesamiento de estos datos en el Servlet, y mandar de nuevo la respuesta al frontend son unos pasos comunes a cualquier aplicación web que necesitas conocer.</p>
	</div>
</article>

<article><div>
<h2 id="estaticas">
	Páginas estáticas
</h2>
<p>El cliente solicita una página que se encuentra en el servidor y el servidor envía al cliente la página tal cual la tiene alojada, sin hacerle ninguna modificación en función de la petición del cliente o de cualquier otro parámetro.</p>
	
<div class="row">
	<div class="col-md-10"><img class="img-fluid" src="img/diagrama.svg" alt="ver diagrama"></div>
	<div class="col-md-2"><?= getRes("video_premium abierto",250353993) ?></div>
</div>



	
</div>
</article>
<article><div>
<h2>Contenedor de aplicaciones vs Servidor de aplicaciones</h2>
<h3>Un Contenedor de aplicaciones</h3>
<p>Sólo alberga Servlets (aplicaciones Java). </p>

<p>JEE es una especificación que determina las APIs para construir una aplicación corporativa. Por tanto, los diferentes servidores de aplicaciones deberán tener ciertas clases que harán lo que J2E determina, aunque la implementación de sus clases difiera.</p>
<p>JEE nace de la necesidad de tener aplicaciones distribuídas. Una aplicación distribuída es aquella en la que sus componentes (el código que la compone) se ejecuta en varios entornos (ordenadores). Para unir todos esos entornos se utiliza el servidor web.</p>



<h3>Un servidor de aplicaciones</h3>

<p>Permite ejecutar aplicaciones con EJB. Un Contenedor de aplicaciones es un software que puede vivir dentro de un servidor de aplicaciones.</p>

<p>Algunos ejemplos de servidores de aplicaciones</p>

<div class="row">
	<div class="col-md-6">

	<h4>De pago</h4>
<ul>
	<li>WebLogic (Oracle)</li>
	<li>JBoss Enterprise Application Platform (Red Hat)</li>
	<li>WebSphere (IBM)</li>
</ul>
	</div>
	<div class="col-md-6">
		
<h4>Gratuitos</h4>
<ul>
	<li>JOnAS (Object Web)</li>
	<li>Wildfly (Versión de JBoss por la comunidad)</li>
	<li>GlassFish (Oracle)</li>
	<li>Gerónimo y TomEE (Apache)</li>
</ul>
	</div>
</div>


	<h4>EJB</h4>
	<p>EJB - es una API de java que implementa diferentes servicios: </p>
	<ul>
		<li>permite persistir una jerarquía de clases en una base de datos (igual que Hibernate).</li>
		<li>facilita la realización de transacciones complejas.</li>
		<li>facilita la interacción entre diferentes servidores (invocar desde un servidor métodos de otro).</li>
		<li>facilita la implementación de seguridad en el proyecto.</li>
	</ul>

	<span class="bold">Desventajas de los EJB</span> <br>
	<ul>
		<li>
			reduce la velocidad de proceso, ya que se hacen más operaciones de las necessarias
		</li>
		<li>la curva de aprendizaje es bastante pronunciada</li>
	</ul>



<article><div>








	<h3>Cargar apache Tomcat en Eclipse</h3>

<div class="row">
	<div class="col-md-10">	<p><span class="font-weight-bold">Descargar el servidor apache tomcat de internet </span><br>
<a href="http://tomcat.apache.org">http://tomcat.apache.org</a></p>

<p><span class="font-weight-bold">Cargar un servidor en eclipse</span> <br>
Menú Window → Preferences → Server → Runtime Enviroment → Add → Apache Tomcat v.9 →  Next <br>

<p>Browse → Seleccionamos la ubicación del servidor.</p>

<p>JRE → Seleccionamos la ubicación del jdk.</p>
</div>
	<div class="col-md-2"><?= getRes("video_premium abierto",250354012) ?></div>
</div>


	

	<h3><span class="text-dark">Ejercicio:</span> crear dos páginas estáticas</h3>
	<p>Crear un proyecto <span class="red">dynamic web project</span> con dos páginas estáticas. Una contiene un enlace, de tal forma que al pulsar sobre el mismo </div>lanzaremos una petición que hará que lleguemos a la otra página.</p>
</article>
<article><div>
	<h2 id="peticiones">Peticiones al servidor: GET vs POST</h2>

<div class="row">
	<div class="col-md-10">	<p>GET: Hey servidor! Mira lo que te mando <span class="green">en la URL</span> y haz algo, quieres?!</p>
	<p>POST: Hey servidor! Mira lo que te mando <span class="green">en mi cuerpecito</span> y haz algo quieres?!</p>
<ul>
	<li>GET es más rápido que POST.</li>
	<li> El número de caracteres que puedes enviar utilizando GET es limitado y depende del servidor.</li>
	<li>La información enviada por GET se puede visualizar en la URL, y por tanto no podríamos enviar información delicada (passwords, etc.)</li>
</ul>
</div>
	<div class="col-md-2"><?= getRes("video_premium abierto",250354027) ?></div>
</div>


</div>
</article>

<article><div>
	<h2 id="servlets">Servlet</h2>

	<div class="row">
		<div class="col-md-10">	<p>Es una clase Java que se ejecuta en el contexto de un servicio de red y su misión es recibir y responder a las peticiones de uno o más clientes.</p>
	<p>El servlet lee cosas del request y escribe cosas en el response.</p>
</div>
		<div class="col-md-2">		<?= getRes("recurso","/curso/assets/zip/jee-workspace.zip","Descargar Workspace") ?></div>
	</div>


<div class="row">
	<div class="col-md-10"><img class="img-fluid" src="img/diagrama2.svg" alt="diagrama 2"></div>
	<div class="col-md-2"><?= getRes("video_premium abierto",250354048) ?></div>
</div>

	


	<h3>Fichero web.xml, dentro de la carpeta WEB-INF</h3>

<div class="row">
	<div class="col-md-10">	<p>Contiene información sobre la configuración de nuestro proyecto web.</p>
	<p>Inicialmente contiene una &lt;welcome-file-list&gt;, que indica el fichero que se va a ir a buscar al acceder al servidor. </p></div>
	<div class="col-md-2"><?= getRes("video_premium abierto",250354055) ?></div>
</div>





	<h3><span class="text-dark">Ejercicio:</span> crear el paquete de los servlets</h3>
<div class="row">
	<div class="col-md-10">	<p>Java resources: src → New package</p>
	<p>Por convenio, el paquete suele empezar por el nombre del dominio dado la vuelta.</p>
	<p>Ej: <br>
pablomonteserin.com → com.pablomonteserin
	</p></div>
	<div class="col-md-2"><?= getRes("video_premium abierto",250354070) ?></div>
</div>



	<h3><span class="text-dark">Ejercicio:</span> crear un nuevo servlet</h3>

<div class="row">
	<div class="col-md-10">	<p>Selecciono el paquete → Botón derecho → new → Servlet</p>
	<p>Al hacer esto se crea una referencia al servlet en el web.xml que debemos actualizar si renombramos el servlet. De lo contrario obtendríamos un error 404 al ejecutar el servlet:</p>
</div>
	<div class="col-md-2"><?= getRes("video_premium abierto",250354083) ?></div>
</div>

	
<div class="notas">
	<p>Nota: <br>
Para ejecutar el servlet: <br>
Btn derecho sobre el código → Run as → Run on server <br>
Alt + shift + x + r</p>

</div>
	

	<h3>Para cada servlet...</h3>
	<p>Al hacer una petición, esta busca en los <span class="blue">servlet-mapping</span> <span class="red">un url-pattern que coincida con la misma</span>. Si encuentra coincidencia buscará el <span class="orange">servlet-class</span> a partir del <span class="black">servlet-name</span> recién obtenido.</p>
<pre><code>
<span class="blue">&lt;servlet-mapping&gt;
	<span class="purple">&lt;servlet-name&gt;A_HolaMundo&lt;/servlet-name&gt;</span>
	<span class="red">&lt;url-pattern&gt;/A_HolaMundo&lt;/url-pattern&gt;</span>
&lt;/servlet-mapping&gt;</span>

&lt;servlet&gt;
	&lt;description&gt;
	&lt;/description&gt;
	&lt;display-name&gt;A_HolaMundo&lt;/display-name&gt;
	<span class="purple">&lt;servlet-name&gt;A_HolaMundo&lt;/servlet-name&gt;</span>
	<span class="orange">&lt;servlet-class&gt;com.pablomonteserin.servlets.A_HolaMundo&lt;/servlet-class&gt;</span>
&lt;/servlet&gt;</code></pre>

<p>A partir de Java 7, con la especificación de Servlets 3.0, es posible cambiar estas entradas en el fichero web.xml, por anotaciones:</p>

<pre><code><span class="font-weight-bold">@WebServlet("/saludar")</span>
public class NoSeQueNoSeCuantoServlet extends HttpServlet {
	...</code></pre>

	<h3><span class="text-dark">Ejercicio:</span> crear un Servlet hola mundo</h3>
	<pre><code>package com.pablomonteserin.servlets;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class A_HolaMundo extends HttpServlet {
	private static final long serialVersionUID = 1L;

    public A_HolaMundo() {
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		System.out.println(&quot;Hola mundo!&quot;);
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
	}

}</code></pre>
</div>
</article>


<article><div>
	<h2 id="librerias_necesarias">Librerías necesarias</h2>


<div class="row">
	<div class="col-md-6">	<p>Btn derecho sobre el proyecto → Properties → Java build path → libraries</p>
	<img class="img-fluid" src="img/pantallazo.svg" alt="pantallazo eclipse"></div>
	<div class="col-md-6">
	<p><span class="font-weight-bold">Add JARs</span> → añade un jar a partir de nuestra carpeta de proyecto. <br>

<span class="font-weight-bold">Add External JARs</span> → añade un jar ubicado en una carpeta de nuestro equipo. <br>

<span class="font-weight-bold">Add Library</span> → añade una librería a partir de las que se encuentren disponibles. Ya que nuestro propio servidor TomCat cuenta con librerías para desplegar las aplicaciones, dependiendo del servidor al que hayamos vinculado eclipse, podremos añadir o no ciertas librerías.</p></div>
</div>




</div><?= getRes("video_premium",250354755) ?>
</article>
<article><div>
<h2 id="servlet_live">Servlet's live</h2>

<div class="row">
	<div class="col-md-10">

<pre><code>
public class ServletLive extends HttpServlet {
private static final long serialVersionUID = 1L;
   
public ServletLive() {
	super();
	System.out.println(&quot;Constructor&quot;);
}

@Override
public void init() throws ServletException {
	System.out.println(&quot;Inicio&quot;);
	super.init();
}

@Override
public void service(ServletRequest arg0, ServletResponse arg1)
	throws ServletException, IOException {
	System.out.println(&quot;Service&quot;);
	super.service(arg0, arg1);
}

protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
	System.out.println(&quot;doGet&quot;);
	destroy();
}

protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
	<span class="green">// TODO Auto-generated method stub</span>
}

@Override
public void destroy() {
	super.destroy();
	System.out.println(&quot;Fin&quot;);
}
}</code></pre></div>
	<div class="col-md-2"><?= getRes("video_premium",250354770) ?>

	<div class="output">
			<p class="green"><span class=" bold">Salida:</span> <br>
					Constructor <br>
					Inicio <br>
					Service <br>
					doGet <br>
					Fin</p>
</div>
</div>
</div>


	</div>
</article>

<article><div>
	<h2 id="recuperar_param">Recuperar parámetros del browser</h2>

<div class="row">
	<div class="col-md-10">	<p>Pondremos el parámetro en el propio broswer: <br>

http://localhost/proyecto/servlet?<span class="red bold">param1</span>=valor1&amp;param2=valor2</p>

<pre><code>
protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
String nombre = request.getParameter(&quot;<span class="red bold">param1</span>&quot;);
response.getWriter().append(&quot;Adios &quot; + nombre);
}</code></pre>
</div>
	<div class="col-md-2"><?= getRes("video_premium",250354778) ?></div>
</div>




	<h2>Ejercicios</h2>
<ol>
	<li>
	<h3><span class="text-dark">Ejercicio:</span> Suma</h3>	
	<div class="row">
		<div class="col-md-10"><p>Hacer un servlet que recoja de la url dos números y calcule la suma. Enviaremos los datos desde un formulario web.</p></div>
		<div class="col-md-2"><?= getRes("video_premium",250354786) ?></div>
	</div>
	
</li>


<li>
<h3><span class="text-dark">Ejercicio:</span> Calculadora</h3>	
<div class="row">
	<div class="col-md-10"><p>Hacer un servlet que recoja de la url la operación (suma, resta, multiplicación, división), opere en consecuencia y muestre el resultado en una página web. Enviaremos los datos desde un formulario de una página HTML.</p></div>
	<div class="col-md-2"><?= getRes("video_premium",250354805) ?></div>
</div>


	
	<div class="notas">
		<p><span class="font-weight-bold">Notas:</span>
Para evitar problemas, mejor usar la palabra ”sumar” en vez del símbolo +, etc...
</p></div></li>


<li><h3 id="ejercicios"><span class="text-dark">Ejercicio:</span> CRUD con BD (Create, Read, Update, Delete)</h3>

<div class="row">
	<div class="col-md-10">
	<p>Este ejercicio es una ampliación del anterior.</p>
	<p>Hacer un servlet que pueda realizar 4 operaciones en función de un parámetro action que le llegue: alta, baja, modificación y consulta.</p>
	<p>Estas operaciones serán evaluadas mediante sentencias condicionales if dentro del servlet. Luego llamaremos a un método de la clase Servicio en el que se efectuará la conexión y la correspondiente operación sobre la base de datos</p>
	<p>Para la conexión a la base de datos usaremos un método estático definido por nosotros, llamado getConnection(), de una clase Java llamada Conexion que nosotros crearemos. </p>
	<p>La tabla sobre la que opera el servlet tiene tres campos id(int, PK), titulo(String), precio(int).</p>
	<p>La operación de  consulta devolverá una colección de beans Libro que recorreremos en el servlet. </p>
</div>
	<div class="col-md-2"><?= getRes("video_premium",250354924) ?></li></div>
</div>

		
</ol>

	
	
</div>	
</article>

</main>
<?php 
});
include $path."/diapos_theme/footer.php";
?>